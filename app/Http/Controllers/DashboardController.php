<?php

namespace App\Http\Controllers;

use App\Dtos\LogErrorDto;
use App\Exceptions\ServiceException;
use App\Services\Pet\GetMedicalHistoryService;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Traits\LogErrorTrait;
use App\Models\Customer;
use App\Models\Pet;
use App\Models\Receipt;
use App\Models\PaymentMethod;
use App\Models\Service;

class DashboardController extends VoyagerBaseController
{

	public function index(Request $request)
	{
		$customers = Customer::all();
		$payment_methods = PaymentMethod::all();
		$services = Service::all();
		$customer = null;
		$pet = null;
		$pets = collect();

		if ($request->has('customer_id')) {
			$customer = Customer::find($request->get('customer_id'));
			if ($customer) {
				$pets = $customer->pets;
			}
		}


		if($request->has('action')){
			if($request->has('customer_id')){
				$customer = Customer::find($request->all()['customer_id']);
			}
			if($request->has('pet_id')){
				$pet = Pet::find($request->all()['pet_id']);
			}
		}

		return view('vendor.voyager.dashboard', compact(
			'customers', 'pets', 'payment_methods','services',
			'customer', 'pet'
		));
	}

	public function store(Request $request)
	{
		$data = [];
		$customerData = [];
		$customerId = 0;
		$petData = [];
		$petId = 0;
		$receiptData = [];
		$receipt = null;

		if($request->all()['action'] == 'search_customer'){
			$request->merge([
				'customer_id' => $request->all()['customer_id'],
				'action' => 'search_customer',
			]);
			return $this->index($request);
		}

		if($request->all()['action'] == 'search_pet'){
			$request->merge([
				'pet_id' => $request->all()['pet_id'],
				'action' => 'search_pet',
			]);
			return $this->index($request);
		}

		$request->validate([
			'first_name' => 'required',
			'last_name' => 'required',
			'address' => 'required',
			'phone' => 'required',
			'postal_code' => 'required',
			'name' => 'required',
			'birthdate' => 'required',
			'race' => 'required',
			'sex' => 'required',
			'weight' => 'required',
			'necklace' => 'required',
			'service_unit' => 'required',
			'service_id' => 'required',
			'payment_method_id' => 'required',
			'concepts' => 'required',
		], [
			'first_name.required' => 'El nombre es requerido',
			'last_name.required' => 'Los apellidos son requeridos',
			'address.required' => 'La dirección es requerida',
			'phone.required' => 'El número de teléfono es requerido',
			'postal_code.required' => 'El código postal es requerido',
			'name.required' => 'El nombre es requerido',
			'birthdate.required' => 'El cumpleaños de la mascota es requerido',
			'race.required' => 'La raza es requerido',
			'sex.required' => 'El sexo de la mascota es requerido',
			'weight.required' => 'El peso es requerido',
			'necklace.required' => 'El collar es requerido',
			'service_unit.required' => 'La unidad por servicio es requerido',
			'service_id.required' => 'El servicio es requerido',
			'payment_method_id.required' => 'El método de pago es requerido',
			'concepts.required' => 'El concepto es requerido',
		]);

		try {
			$data =  [
				'message'    => "Informacion guardada con éxito",
				'alert-type' => 'success',
			];

			// Si el cliente no existe, se crea
			if($request->all()['customer_id'] == null){
				$customerData = $request->only([
					'first_name',
					'last_name',
					'address',
					'phone',
					'postal_code',
					'gender',
					'email'
				]);
				$customerData['full_name'] = $customerData['first_name'] . ' ' . $customerData['last_name'];
				$customer = Customer::create($customerData);
				$customerId = $customer->id;
			} else {
				$customerId = intval($request->all()['customer_id']);
			}

			// Si el perro no existe, se crea
			if($request->all()['pet_id'] == null){
				$petData = $request->only([
					'name',
					'food',
					'walk',
					'morning',
					'afternoon',
					'race',
					'weight',
					'birthdate',
					'admission_date',
					'house_place',
					'housemates',
					'sex',
					'photo',
					'other_morning',
					'other_afternoon',
					'night',
					'is_aggressive',
					'necklace',
					'is_aggressive_details',
					'necklace_details',
					'allergy',
					'allergy_details',
					'fracture',
					'fracture_details',
					'scar',
					'scar_details',
					'hospitalization',
					'hospitalization_details',
					'training',
					'training_details',
					'indoor',
					'outdoor',
					'arrive',
					'behavior_dogs',
					'behavior_people',
					'observation',
					'recommendation',
					'medic',
				]);
				$petData['is_aggressive'] = intval($request->all()['is_aggressive']);
				$petData['necklace'] = intval($request->all()['necklace']);
				$petData['allergy'] = intval($request->all()['allergy']);
				$petData['fracture'] = intval($request->all()['fracture']);
				$petData['scar'] = intval($request->all()['scar']);
				$petData['hospitalization'] = intval($request->all()['hospitalization']);
				$petData['training'] = intval($request->all()['training']);
				$petData['customer_id'] = $customerId;
				$pet = Pet::create($petData);
				$petId = $pet->id;
			} else {
				$petId = intval($request->all()['pet_id']);
			}

			// Crear la Venta
			$receiptData = $request->only([
				'service_id',
				'payment_method_id',
				'amount',
				'service_unit',
				'date',
			]);

			$service = Service::find($receiptData['service_id']);
			$receiptData['amount'] = $service->cost * intval($receiptData['service_unit']);
			$receiptData['customer_id'] = $customerId;
			$receiptData['pet_id'] = $petId;
			$receiptData['user_id'] = auth()->id();
			$receiptData['date'] = date('Y-m-d');

			// Guardar los conceptos si existen
			if ($request->has('concepts') && !empty($request->concepts)) {
				$receiptData['concepts'] = $request->concepts;
			}

			$receipt = Receipt::create($receiptData);
		} catch (\Exception $ex) {
			$dto = new LogErrorDto();
			$dto->url = $request->path();
			$dto->description = "STORE";
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$data = [
				'message'    => $ex->getMessage(),
				'alert-type' => 'error',
			];
			return redirect()->route("voyager.dashboard")->with($data);
		}

		return redirect()->route("voyager.receipt.pdf", $receipt->id);
	}

	public function search(Request $request)
	{

	}
}

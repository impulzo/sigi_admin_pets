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
		$pets = Pet::all();
		$payment_methods = PaymentMethod::all();
		$services = Service::all();


		return view('vendor.voyager.dashboard', compact(
			'customers', 'pets', 'payment_methods','services'
		));
	}

	public function store(Request $request)
	{
		dd($request->all());
		$data = [];
		$customerData = [];
		$customerId = 0;
		$petData = [];
		$petId = 0;
		$receiptData = [];
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
				$customerId = $request->all()['customer_id'];
			}

			// Si el perro no existe, se crea
			if(request->all()['pet_id'] == null){
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
				$petId = $request->all()['pet_id'];
			}

			// Crear la Venta
			$receiptData = $request->only([
				'service_id',
				'payment_method_id',
				'amount',
				'service_unit',
				'date',
			]);



			$receiptData['customer_id'] = $customerId;
			$receiptData['pet_id'] = $petId;
			$receiptData['user_id'] = auth()->id();
			$receipt = Receipt::create($receiptData);

		} catch (ServiceException $ex) {
			$dto = new LogErrorDto();
			$dto->url = $request->path();
			$dto->description = "STORE";
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$this->logError($dto, $ex->getType());
			$data = [
				'message'    => $ex->getMessage(),
				'alert-type' => 'error',
			];
		} finally {
			return redirect()->route("voyager.dashboard")->with($data);
		}

	}
}

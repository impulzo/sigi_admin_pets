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
	public function findPetById($id){
		$pet = Pet::find($id);
    	return response()->json($pet);
	}
	public function findCustomerById($id){
		$customer = Customer::findOrFail($id);
		$customer['pets'] = $customer->pets;
    	return response()->json($customer);
	}

	public function index(Request $request)
	{
		$customers = Customer::all();
		$payment_methods = PaymentMethod::all();
		$services = Service::all();
		return view('vendor.voyager.dashboard', compact('customers','payment_methods','services'));
	}

	public function store(Request $request)
	{
		$this->validateRequest($request);

		try {
			$customerId = $this->handleCustomer($request);
			$petId = $this->handlePet($request, $customerId);
			$receipt = $this->handleReceipt($request, $customerId, $petId);

			return redirect()->route("voyager.receipt.pdf", $receipt->id);

		} catch (\Exception $ex) {
			$this->logError($request, $ex);

			return redirect()->route("voyager.dashboard")->with([
				'message'    => $ex->getMessage(),
				'alert-type' => 'error',
			]);
		}
	}
	private function validateRequest(Request $request)
	{
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
			'race.required' => 'La raza es requerida',
			'sex.required' => 'El sexo de la mascota es requerido',
			'weight.required' => 'El peso es requerido',
			'necklace.required' => 'El collar es requerido',
			'service_unit.required' => 'La unidad por servicio es requerido',
			'service_id.required' => 'El servicio es requerido',
			'payment_method_id.required' => 'El método de pago es requerido',
			'concepts.required' => 'El concepto es requerido',
		]);
	}
	private function handleCustomer(Request $request): int
	{
		if ($request->customer_id) {
			return intval($request->customer_id);
		}

		$data = $request->only([
			'first_name', 'last_name', 'address', 'phone', 'postal_code', 'gender', 'email'
		]);
		$data['full_name'] = $data['first_name'] . ' ' . $data['last_name'];

		return Customer::create($data)->id;
	}
	private function handlePet(Request $request, int $customerId): int
	{
		if ($request->pet_id) {
			return intval($request->pet_id);
		}

		$data = $request->only([
			'name', 'food', 'walk', 'morning', 'afternoon', 'race', 'weight', 'birthdate',
			'admission_date', 'house_place', 'housemates', 'sex', 'photo',
			'other_morning', 'other_afternoon', 'night',
			'is_aggressive', 'necklace', 'is_aggressive_details', 'necklace_details',
			'allergy', 'allergy_details', 'fracture', 'fracture_details', 'scar', 'scar_details',
			'hospitalization', 'hospitalization_details', 'training', 'training_details',
			'indoor', 'outdoor', 'arrive', 'behavior_dogs', 'behavior_people',
			'observation', 'recommendation', 'medic',
		]);

		// Normalizar booleanos
		foreach (['is_aggressive', 'necklace', 'allergy', 'fracture', 'scar', 'hospitalization', 'training'] as $field) {
			$data[$field] = intval($request->input($field, 0));
		}

		$data['customer_id'] = $customerId;

		return Pet::create($data)->id;
	}
	private function handleReceipt(Request $request, int $customerId, int $petId): Receipt
	{
		$data = $request->only([
			'service_id', 'payment_method_id', 'amount', 'service_unit', 'date',
		]);

		$service = Service::findOrFail($data['service_id']);
		$data['amount'] = $service->cost * intval($data['service_unit']);
		$data['customer_id'] = $customerId;
		$data['pet_id'] = $petId;
		$data['user_id'] = auth()->id();
		$data['date'] = now()->format('Y-m-d');

		if ($request->filled('concepts')) {
			$data['concepts'] = $request->concepts;
		}

		return Receipt::create($data);
	}

	private function logError(Request $request, \Exception $ex): void
	{
		$dto = new LogErrorDto();
		$dto->url = $request->path();
		$dto->description = "STORE";
		$dto->request = json_encode($request->all());
		$dto->response = $ex->getMessage();
		$dto->status = 500;
	}
}

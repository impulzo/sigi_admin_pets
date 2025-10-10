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
			'services' => 'required|array|min:1',
			'services.*' => 'required|exists:services,id',
			'service_units' => 'required|array|min:1',
			'service_units.*' => 'required|numeric|min:1',
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
			'services.required' => 'Al menos un servicio es requerido',
			'services.*.required' => 'El servicio es requerido',
			'services.*.exists' => 'El servicio seleccionado no es válido',
			'service_units.required' => 'Las unidades son requeridas',
			'service_units.*.required' => 'Las unidades son requeridas',
			'service_units.*.numeric' => 'Las unidades deben ser un número',
			'service_units.*.min' => 'Las unidades deben ser al menos 1',
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
		foreach (['is_aggressive', 'necklace', 'allergy', 'fracture', 'scar', 'hospitalization', 'training'] as $field) {
			$data[$field] = intval($request->input($field, 0));
		}

		$data['customer_id'] = $customerId;

		return Pet::create($data)->id;
	}
	private function handleReceipt(Request $request, int $customerId, int $petId): Receipt
	{
		$data = $request->only([
			'payment_method_id', 'date',
		]);

		// Create the receipt first
		$receipt = new Receipt();
		$receipt->customer_id = $customerId;
		$receipt->pet_id = $petId;
		$receipt->user_id = auth()->id();
		$receipt->date = now()->format('Y-m-d');
		$receipt->payment_method_id = $request->payment_method_id;
		$receipt->concepts = $request->concepts ?? null;

		// Calculate total amount from all services
		$totalAmount = 0;
		$servicesData = [];

		foreach ($request->services as $index => $serviceId) {
			$service = Service::findOrFail($serviceId);
			$units = $request->service_units[$index] ?? 1;
			$subtotal = $service->cost * intval($units);
			$totalAmount += $subtotal;

			// Prepare data for pivot table
			$servicesData[$serviceId] = [
				'service_unit' => $units,
				'created_at' => now(),
				'updated_at' => now()
			];
		}

		$receipt->amount = $totalAmount;
		$receipt->save();

		// Attach services to receipt using the pivot table
		$receipt->services()->attach($servicesData);

		return $receipt;
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

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
		$data = [];
		try {
			$dto = new LogErrorDto();

			$jsonData = (object) $request->all();
			$this->storeService->run($jsonData);

			$data =  [
				'message'    => "Informacion actualizada con éxito",
				'alert-type' => 'success',
			];
		} catch (ServiceException $ex) {
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
			$customerdata = $request->only([
				'first_name',
				'last_name',
				'address',
				'phone',
				'postal_code',
				'gender',
				'email'
			]);

			$petdata = $request->only([
				'name',
				'food',
				'race',
				'weight',
				'birthdate',
				'sex',
				'photo',
				'is_aggressive_details',
				'necklace_details'
			]);

			$receiptdata = $request->only([
				'service_id',
				'payment_method_id',
				'amount',
				'concept',
				'date',
			]);

			$petdata['is_aggressive'] = $request->has('is_aggressive') ? 1 : 0;
			$petdata['necklace'] = $request->has('necklace') ? 1 : 0;


			$customerdata['full_name'] = $customerdata['first_name'] . ' ' . $customerdata['last_name'];
			$customer = Customer::create($customerdata);

			$petdata['customer_id'] = $customer->id;
			$pet = Pet::create($petdata);

			$receiptdata['customer_id'] = $customer->id;
			$receiptdata['user_id'] = auth()->id();
			$receipt = Receipt::create($receiptdata);

			return redirect()->route("voyager.dashboard")->with($data);
		}

	}
}

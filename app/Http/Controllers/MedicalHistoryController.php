<?php

namespace App\Http\Controllers;

use App\Dtos\LogErrorDto;
use App\Exceptions\ServiceException;
use App\Services\MedicalHistory\GetVaccineService;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Traits\LogErrorTrait;
use App\Models\Pet;


class MedicalHistoryController extends VoyagerBaseController
{
    private $service;

    public function __construct(GetVaccineService $service)
    {
        $this->service = $service;
    }

	public function vaccineByMedicalHistory(Request $request, $id)
	{
		$pet = Pet::find($id);
		$petName = $pet?->name;
		$data = [];
		try {
			$dto = new LogErrorDto();

			$data = $this->service->run($id);
		} catch (ServiceException $ex) {
			$dto->url = $request->path();
			$dto->description = "STORE";
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$this->logError($dto, $ex->getType());
		} finally {
			return view('vendor.voyager.medicalhistories.vaccine', compact('data', 'petName'));
		}
	}
}

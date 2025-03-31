<?php

namespace App\Http\Controllers;

use App\Dtos\LogErrorDto;
use App\Exceptions\ServiceException;
use App\Services\Pet\GetMedicalHistoryService;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Traits\LogErrorTrait;


class PetController extends VoyagerBaseController
{
    private $service;

    public function __construct(GetMedicalHistoryService $service)
    {
        $this->service = $service;
    }

    public function medicalhistoryByPet(Request $request, $id)
	{
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
			return view('vendor.voyager.pets.medicalhistory', compact('data'));
		}
	}
}

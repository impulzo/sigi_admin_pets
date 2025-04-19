<?php

namespace App\Http\Controllers;

use App\Dtos\LogErrorDto;
use App\Exceptions\ServiceException;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Traits\LogErrorTrait;
use App\Models\Service;


class ReceiptController extends VoyagerBaseController
{
	public function index(Request $request)
	{
		$services = Service::all();
        $value = Receipt::with('service')->get()->pluck('service.cost');


        return view('vendor.voyager.receipt', compact(
            'services',
        ));
	}

	public function store(Request $request)
	{
		$request->merge([
			'user_id' => \Auth::user()->id,
		]);
		return parent::store($request);
	}
}

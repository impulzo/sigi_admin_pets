<?php

namespace App\Http\Controllers;

use App\Dtos\LogErrorDto;
use App\Exceptions\ServiceException;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Traits\LogErrorTrait;


class CashauditController extends VoyagerBaseController
{
	public function store(Request $request)
	{
		$request->merge([
			'user_id' => \Auth::user()->id,
		]);
		return parent::store($request);
	}
}

<?php

namespace App\Http\Controllers;

use App\Dtos\LogErrorDto;
use App\Exceptions\ServiceException;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Traits\LogErrorTrait;
use App\Models\Service;
use App\Models\Customer;
use App\Models\Pet;
use App\Models\Receipt;

class ReceiptController extends VoyagerBaseController
{
	public function store(Request $request)
	{
		$request->merge([
			'user_id' => \Auth::user()->id,
		]);
		return parent::store($request);
	}

	public function generateReceiptPdf($id)
	{
		$receipt = Receipt::find($id);
		return view('vendor.voyager.pdf.receipt_payment', compact('receipt'));
	}

	public function inscripcionPdf($id)
	{
		$receipt = Receipt::find($id);
		$customer = Customer::find($receipt->customer_id);
		$pet = Pet::find($receipt->pet_id);
		return view('vendor.voyager.pdf.inscripcion', compact('receipt'));

	}
}

<?php

namespace App\Http\Controllers;

use App\Dtos\LogErrorDto;
use App\Exceptions\ServiceException;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Traits\LogErrorTrait;
use App\Models\Expense;
use App\Models\Receipt;


class CashAuditController extends VoyagerBaseController
{
	public function store(Request $request)
	{
		$totalExpenses = 0;
		$totalReceipts = 0;

		$startDate = $request->all()['start_date'];
		$endDate = $request->all()['finish_date'];

		$expenses = Expense::whereBetween('date', [$startDate, $endDate])->get();
		$receipts = Receipt::whereBetween('date', [$startDate, $endDate])->get();

		foreach ($expenses as $expense) {
			$totalExpenses += $expense->amount;
		}

		foreach ($receipts as $receipt) {
			$totalReceipts += $receipt->amount;
		}

		$request->merge([
			'user_id' => \Auth::user()->id,
			'total_bills' => $totalExpenses,
			'total_ingress' => $totalReceipts,
		]);
		return parent::store($request);
	}

	public function update(Request $request, $id){
		$totalExpenses = 0;
		$totalReceipts = 0;

		$startDate = $request->all()['start_date'];
		$endDate = $request->all()['finish_date'];

		$expenses = Expense::whereBetween('date', [$startDate, $endDate])->get();
		$receipts = Receipt::whereBetween('date', [$startDate, $endDate])->get();

		foreach ($expenses as $expense) {
			$totalExpenses += $expense->amount;
		}

		foreach ($receipts as $receipt) {
			$totalReceipts += $receipt->amount;
		}

		$request->merge([
			'user_id' => \Auth::user()->id,
			'total_bills' => $totalExpenses,
			'total_ingress' => $totalReceipts,
		]);

		return parent::update($request, $id);
	}
}

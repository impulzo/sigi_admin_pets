<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\MedicalHistoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReceiptController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{any}', [MainController::class, 'index'])->where('any', '^(?!admin).*$');
Route::get('/',function(){
	return redirect('/admin');
});


Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();

	// redirect dashboard
	Route::get('/',function(){
		return redirect('/admin/dashboard');
	});
    //inventory
    Route::get('/inventories/{id}/history', [InventoryController::class, 'historyByInventory'])
        ->name('inventories.history');
	// pet
	Route::get('/pets/{id}/medicalhistory', [PetController::class, 'medicalhistoryByPet'])
        ->name('pets.medicalhistory');
	//medicalhistory
	Route::get('medicalhistory/{id}/vaccine', [MedicalHistoryController::class, 'vaccineByMedicalHistory'])
        ->name('medicalhistories.vaccine');
	//receipt
	Route::get('receipts/{id}/inscription', [ReceiptController::class, 'inscriptionPdf'])
	->name('voyager.receipt.inscription');

	Route::get('receipt/{id}/pdf', [ReceiptController::class, 'generateReceiptPdf'])
	->name('voyager.receipt.pdf');
	// dashboard
	Route::get('/dashboard', [DashboardController::class, 'index'])
	->name('voyager.dashboard');

	Route::post('/dashboard/store', [DashboardController::class, 'store'])
	->name('voyager.dashboard.store');

	Route::get('/dashboard/receipt/{id}', [ReceiptController::class, 'generateReceiptPdf'])
	->name('voyager.receipt.pdf');

});

Auth::routes();

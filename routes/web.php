<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\MedicalHistoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\MainController;

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
    //inventory
    Route::get('/inventories/{id}/history', [InventoryController::class, 'historyByInventory'])
        ->name('inventories.history');
	// pet
	Route::get('/pets/{id}/medicalhistory', [PetController::class, 'medicalhistoryByPet'])
        ->name('pets.medicalhistory');
	Route::get('medicalhistory/{id}/vaccine', [MedicalHistoryController::class, 'vaccineByMedicalHistory'])
        ->name('medicalhistories.vaccine');

});

Auth::routes();

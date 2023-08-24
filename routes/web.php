<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/farmers', [FarmerController::class, 'index'])->name('farmers.index');
Route::get('/farmers/create', [FarmerController::class, 'create'])->name('farmers.create');
Route::post('/farmers', [FarmerController::class, 'store'])->name('farmers.store');
Route::get('/farmers/{farmer}', [FarmerController::class, 'show'])->name('farmers.show');
Route::get('/farmers/{farmer}/edit', [FarmerController::class, 'edit'])->name('farmers.edit');
Route::put('/farmers/{farmer}', [FarmerController::class, 'update'])->name('farmers.update');
Route::delete('/farmers/{farmer}', [FarmerController::class, 'destroy'])->name('farmers.destroy');
Route::get('/groups/{groupname}/data', [FarmerController::class, 'getGroupData']);


/*
Route::get('/', 'App\Http\Controllers\FarmerController@index')->name('farmer.index');
Route::get('/create', 'App\Http\Controllers\FarmerController@create')->name('farmer.create');
Route::post('/', 'App\Http\Controllers\FarmerController@store')->name('farmer.store');
Route::get('/{id}', 'App\Http\Controllers\FarmerController@show')->name('farmer.show');
Route::get('/{id}/edit', 'App\Http\Controllers\FarmerController@edit')->name('farmer.edit');
Route::put('/{id}', 'App\Http\Controllers\FarmerController@update')->name('farmer.update');
Route::delete('/{id}', 'App\Http\Controllers\FarmerController@destroy')->name('farmer.destroy');
*/




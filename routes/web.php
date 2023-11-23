<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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


Route::get('delete-hotel/{id}',[HotelController::class,'delete_hotel']);
Route::get('update-hotel/{id}',[HotelController::class,'update_hotel']);
Route::post('update/traitement',[HotelController::class,'update_hotel_traitement']);
Route::get('hotel',[HotelController::class,'liste_hotel']);
Route::get('ajouter',[HotelController::class,'ajouter_hotel']);
Route::post('ajouter/traitement',[HotelController::class,'ajouter_hotel_traitement']);



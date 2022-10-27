<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetTypeController;
use App\Http\Controllers\SpecialtiesController;
use App\Http\Controllers\VeterinariansController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\FindOwnerController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\VisitComtroller;

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
Route::get('/',[HomeController::class,'index'])->name('home.welcome');
Route::resource('PetType',PetTypeController::class);
Route::resource('Specilities',SpecialtiesController::class);
Route::resource('Veterinarian',VeterinariansController::class);
Route::resource('Owner',OwnerController::class);
Route::resource('OwnerInfo',FindOwnerController::class);
Route::resource('Pet',PetController::class);
Route::resource('Visit',VisitComtroller::class);


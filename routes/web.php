<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ParkingController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/map' , function () {
   return view('map');
});

Route::get('/login', function () {
    return view('/auth/login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/index', function () {
    return view('customer/index');
})->name('customer.index');

Route::get('/customer/map', function () {
    return view('customer/mapCustomer');
});

Route::get('/Business/Dashboard', function () {
    return view('/Business/dashboard');
});

Route::get('/Business/Parking', [ParkingController::class, 'getParkingForUser']);

Route::get('/Business/AddParking',[ParkingController::class, 'addParking']);

Route::post('/Business/AddParkingCar',[ParkingController::class, 'handleAdd']);
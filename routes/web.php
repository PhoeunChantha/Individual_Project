<?php

use App\Models\CustomerType;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerTypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use App\Models\Room;
use App\Models\RoomType;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('Hotel', function () {
//     return view('Compenens.Dashboard');
// });

Route::get('/',[Dashboard::class,'index'])->name('front.home');

//Route::get('customer',[Dashboard::class,'customer'])->name('front.customer');

Route::prefix('/Compenens/Customers')->middleware('web')->group(function () {
    Route::get('/customer/index',[CustomerController::class,'index'])->name('customer.index');
    Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('/customer/index', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

});
//
Route::get('/Compenens/Dashboard',[Dashboard::class,'CustomerType'])->name('customerType.index');
Route::get('/Customertypes/index', [CustomerTypeController::class, 'index'])->name('customertype.index');
Route::get('/customertypse/create', [CustomerTypeController::class, 'create'])->name('customertype.create');
Route::post('/customertype/index', [CustomerTypeController::class, 'store'])->name('customertype.store');
Route::get('/customertype/edit/{id}',[CustomerTypeController::class, 'edit'])->name('customertype.edit');
Route::post('/customertype/update/{id}',[CustomerTypeController::class, 'update'])->name('customertype.update');
Route::delete('/customertype/{id}',[CustomerTypeController::class, 'destroy'])->name('customertype.destroy');
//

Route::get('Rooms',[Dashboard::class,'Room'])->name('room.index');
Route::get('/rooms/index', [RoomController::class,'index'])->name('room.index');
Route::get('/room/create', [RoomController::class, 'create'])->name('room.create');
Route::post('/room/index', [RoomController::class,'store'])->name('room.store');
Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->name('room.edit');
Route::post('/room/update/{id}', [RoomController::class,'update'])->name('room.update');
Route::delete('/room/{id}',[RoomController::class,'destroy'])->name('room.destroy');
//

Route::get('RoomType',[Dashboard::class,'RoomType'])->name('roomtype.index');
Route::get('/roomtype/index',[RoomTypeController::class,'index'])->name('roomtype.index');
Route::get('/roomtype/create',[RoomTypeController::class,'create'])->name('roomtype.create');
Route::post('/roomtype/index',[RoomTypeController::class,'store'])->name('roomtype.store');
Route::get('/roomtype/edit/{id}',[RoomTypeController::class,'edit'])->name('roomtype.edit');
Route::post('/roomtype/update/{id}',[RoomTypeController::class,'update'])->name('roomtype.update');
Route::delete('/roomtype/{id}',[RoomTypeController::class,'destroy'])->name('roomtype.destroy');



Route::get('Reservation',[Dashboard::class,'Reservation'])->name('front.Reservation');

Route::get('ReservationDetail',[Dashboard::class,'ReservationDetail'])->name('front.ReservationDetail');



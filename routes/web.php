<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Manager\BusinessController as ManagerBusinessController;
use App\http\Controllers\Employee\BusinessController as EmployeeBusinessController;
use App\http\Controllers\Owner\BusinessController as OwnerBusinessController;
use App\http\Controllers\Warehousestaff\BusinessController as WarehousestaffBusinessController;

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

Auth::routes();

Route::get('owner/home', [App\Http\Controllers\Owner\HomeController::class, 'index'])->name('owner.home');
Route::get('manager/home', [App\Http\Controllers\Manager\HomeController::class, 'index'])->name('owner.home');
Route::get('employee/home', [App\Http\Controllers\Employee\HomeController::class, 'index'])->name('employee.home');
Route::get('warehouse/home', [App\Http\Controllers\Warehousestaff\HomeController::class, 'index'])->name('employee.home');

Route::get('/employee/businesses/', [EmployeeBusinessController::class, 'index'])->name('employee.businesses.index');
Route::get('/employee/businesses/{id}', [EmployeeBusinessController::class, 'show'])->name('employee.businesses.show'); 

Route::get('/manager/businesses/', [ManagerBusinessController::class, 'index'])->name('manager.businesses.index');
Route::get('/manager/businesses/{id}/show', [ManagerBusinessController::class, 'show'])->name('manager.businesses.show');
Route::get('/manager/businesses/create', [ManagerBusinessController::class, 'create'])->name('manager.businesses.create');
Route::get('/manager/businesses/store', [ManagerBusinessController::class, 'store'])->name('manager.businesses.store');
Route::get('/manager/businesses/{id}/edit', [ManagerBusinessController::class, 'edit'])->name('manager.businesses.edit');
Route::get('/manager/businesses/{id}', [ManagerBusinessController::class, 'update'])->name('manager.businesses.update');
Route::delete('/manager/businesses/{id}', [ManagerBusinessController::class, 'destroy'])->name('manager.businesses.destroy');

Route::get('/owner/businesses/', [OwnerBusinessController::class, 'index'])->name('owner.businesses.index');
Route::get('/owner/businesses/{id}/show', [OwnerBusinessController::class, 'show'])->name('owner.businesses.show');
Route::get('/owner/businesses/create', [OwnerBusinessController::class, 'create'])->name('owner.businesses.create');
Route::get('/owner/businesses/store', [OwnerBusinessController::class, 'store'])->name('owner.businesses.store');
Route::get('/owner/businesses/{id}/edit', [OwnerBusinessController::class, 'edit'])->name('owner.businesses.edit');
Route::get('/owner/businesses/{id}', [OwnerBusinessController::class, 'update'])->name('owner.businesses.update');
Route::delete('/owner/businesses/{id}', [OwnerBusinessController::class, 'destroy'])->name('owner.businesses.destroy');

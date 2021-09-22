<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeesController;

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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'store']);


Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/dashboard', [DashboardController::class, 'store']);
Route::post('/dashboard/edit/{id}', [DashboardController::class, 'update']);
Route::delete('/dashboard/delete/{id}', [DashboardController::class, 'destroy']);

Route::get('/employees', [EmployeesController::class, 'index'])->name('employees');
Route::post('/employees', [EmployeesController::class, 'store']);
Route::post('/employees/update/{id}', [EmployeesController::class, 'update']);
Route::delete('/employees/delete/{id}', [EmployeesController::class, 'destroy']);

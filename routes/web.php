<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.form-category');
});

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

Route::resource('dashboard/category', App\Http\Controllers\CategoryController::class);
Route::resource('dashboard/employee', App\Http\Controllers\EmployeeController::class);
Route::resource('dashboard/kgb', App\Http\Controllers\KgbController::class);
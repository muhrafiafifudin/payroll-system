<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
    if (Auth::user()) {
        return redirect()->route('dashboard');
    }
    return view('auth.login');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    // Route Golongan
    // Route::resource('dashboard/category', CategoryController::class);
    Route::get('dashboard/category', 'App\Http\Controllers\CategoryController@index')->name('category.index');
    Route::post('dashboard/category', 'App\Http\Controllers\CategoryController@store')->name('category.store')->middleware('role:admin');
    Route::get('dashboard/category/create', 'App\Http\Controllers\CategoryController@create')->name('category.create')->middleware('role:admin');
    Route::get('dashboard/category/{category}', 'App\Http\Controllers\CategoryController@show')->name('category.show');
    Route::put('dashboard/category/{category}', 'App\Http\Controllers\CategoryController@update')->name('category.update')->middleware('role:admin');
    Route::delete('dashboard/category/{category}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy')->middleware('role:admin');
    Route::get('dashboard/category/{category}/edit', 'App\Http\Controllers\CategoryController@edit')->name('category.edit')->middleware('role:admin');
    // Route Data Pegawai
    Route::get('dashboard/employee', 'App\Http\Controllers\EmployeeController@index')->name('employee.index');
    Route::post('dashboard/employee', 'App\Http\Controllers\EmployeeController@store')->name('employee.store')->middleware('role:admin');
    Route::get('dashboard/employee/create', 'App\Http\Controllers\EmployeeController@create')->name('employee.create')->middleware('role:admin');
    Route::get('dashboard/employee/{employee}', 'App\Http\Controllers\EmployeeController@show')->name('employee.show');
    Route::put('dashboard/employee/{employee}', 'App\Http\Controllers\EmployeeController@update')->name('employee.update')->middleware('role:admin');
    Route::delete('dashboard/employee/{employee}', 'App\Http\Controllers\EmployeeController@destroy')->name('employee.destroy')->middleware('role:admin');
    Route::get('dashboard/employee/{employee}/edit', 'App\Http\Controllers\EmployeeController@edit')->name('employee.edit')->middleware('role:admin');
    // Route Data Kenaikan Gaji Pegawai
    Route::get('dashboard/kgb', 'App\Http\Controllers\KgbController@index')->name('kgb.index');
    Route::post('dashboard/kgb', 'App\Http\Controllers\KgbController@store')->name('kgb.store')->middleware('role:admin');
    Route::get('dashboard/kgb/create', 'App\Http\Controllers\KgbController@create')->name('kgb.create')->middleware('role:admin');
    Route::get('dashboard/kgb/{kgb}', 'App\Http\Controllers\KgbController@show')->name('kgb.show');
    Route::put('dashboard/kgb/{kgb}', 'App\Http\Controllers\KgbController@update')->name('kgb.update')->middleware('role:admin');
    Route::delete('dashboard/kgb/{kgb}', 'App\Http\Controllers\KgbController@destroy')->name('kgb.destroy')->middleware('role:admin');
    Route::get('dashboard/kgb/{kgb}/edit', 'App\Http\Controllers\KgbController@edit')->name('kgb.edit')->middleware('role:admin');
    // Route DOM PDF
    Route::get('print-pdf/{id}', 'App\Http\Controllers\KgbController@generatePdf')->middleware('role:admin');
    Route::get('print-pdf', 'App\Http\Controllers\KgbController@generatePdf_All')->middleware('role:admin');
});

require __DIR__.'/auth.php';

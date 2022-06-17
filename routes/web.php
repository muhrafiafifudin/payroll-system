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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    // Route Data Pegawai
    Route::resource('/dashboard/employee', App\Http\Controllers\EmployeeController::class);
    // Route Data Kenaikan Gaji Pegawai
    Route::resource('/dashboard/kgb', App\Http\Controllers\KgbController::class);
    // Route DOM PDF
    Route::get('print-pdf/{id}', 'App\Http\Controllers\KgbController@generatePdf');
});

require __DIR__.'/auth.php';

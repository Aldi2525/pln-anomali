<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnomaliController;
use App\Http\Controllers\BayController;
use App\Http\Controllers\DatapendukungController;
use App\Http\Controllers\GarduController;
use App\Http\Controllers\KategoriAnomaliController;
use App\Http\Controllers\PelaksanaController;
use App\Http\Controllers\PeralatanController;
use App\Http\Controllers\PhasaController;
use Illuminate\Support\Facades\Route;

// route Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'dashboard');
        Route::get('/', 'index');

    });

    Route::resource('gardu', GarduController::class);
    Route::resource('bay', BayController::class);
    Route::resource('peralatan', PeralatanController::class);
    Route::resource('phasa', PhasaController::class);
    Route::resource('kategori', KategoriAnomaliController::class);
    Route::resource('pelaksana', PelaksanaController::class);
    Route::resource('anomali', AnomaliController::class);
    Route::resource('datapendukung', DatapendukungController::class);

    // simpen didieu

});

Route::get('/', function () {
    return redirect('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
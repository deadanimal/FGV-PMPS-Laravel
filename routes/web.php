<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PelbagaiController;

use App\Http\Controllers\BaggingDataController;
use App\Http\Controllers\ControlPollinationController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\HarvestController;
use App\Http\Controllers\KerosakanController;
use App\Http\Controllers\PokokController;
use App\Http\Controllers\PollenController;
use App\Http\Controllers\QualityControlController;
use App\Http\Controllers\TandanController;
use App\Http\Controllers\TugasanController;
use App\Http\Controllers\UserController;




Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', [UserController::class, 'dashboard']);
    Route::get('profil', [UserController::class, 'profil']);
    Route::get('user', [UserController::class, 'senarai_user']);
    Route::get('user/{id}', [UserController::class, 'satu_user']);
    Route::post('user', [UserController::class, 'cipta_user']);
    Route::put('user/{id}', [UserController::class, 'ubah_user']);     

    Route::get('pokok', [PokokController::class, 'senarai_pokok']);
    Route::get('pokok/{id}', [PokokController::class, 'satu_pokok']);
    Route::post('pokok', [PokokController::class, 'cipta_pokok']);
    Route::put('pokok/{id}', [PokokController::class, 'ubah_pokok']); 

    Route::get('tandan', [TandanController::class, 'senarai_tandan']);
    Route::get('tandan/{id}', [TandanController::class, 'satu_tandan']);
    Route::post('tandan', [TandanController::class, 'cipta_tandan']);
    Route::put('tandan/{id}', [TandanController::class, 'ubah_tandan']);     
    
    
  
    
    
});




require __DIR__.'/auth.php';

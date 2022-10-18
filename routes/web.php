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

    Route::get('', [UserController::class, 'dashboard']);
    Route::get('dashboard', [UserController::class, 'dashboard']);
    Route::get('profil', [UserController::class, 'profil']); 
    Route::put('profil/katalaluan', [UserController::class, 'kemaskini_katalaluan']);

    Route::get('user', [UserController::class, 'senarai_user']);
    Route::get('user/{id}', [UserController::class, 'satu_user']);
    Route::post('user', [UserController::class, 'cipta_user']);
    Route::put('user/{id}', [UserController::class, 'kemaskini_user']);     
    Route::put('user/{id}/katalaluan', [UserController::class, 'kemaskini_katalaluan_user']);

    Route::get('pokok', [PokokController::class, 'senarai_pokok']);
    Route::post('pokok', [PokokController::class, 'cipta_pokok']);
    Route::get('pokok/{id}', [PokokController::class, 'satu_pokok']);
    Route::put('pokok/{id}', [PokokController::class, 'kemaskini_pokok']); 

    Route::get('pokok/{id}/tandan', [TandanController::class, 'senarai_tandan']);    
    Route::post('pokok/{id}/tandan', [TandanController::class, 'cipta_tandan']);
    Route::get('pokok/{id}/tandan/{tandan_id}', [TandanController::class, 'satu_tandan']);
    Route::put('pokok/{id}/tandan/{tandan_id}', [TandanController::class, 'kemaskini_tandan']);
    
    
  
    
    
});




require __DIR__.'/auth.php';

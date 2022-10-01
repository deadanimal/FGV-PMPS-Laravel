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

Route::get('', [PelbagaiController::class, 'view_landing']);


Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', [PelbagaiController::class, 'view_dashboard']);

    Route::middleware(['role:admin|super-admin'])->group(function () {

        Route::post('/reset', [PelbagaiController::class, 'reset_password']);
        Route::get('/profile', [PelbagaiController::class, 'view_profile']);
        Route::post('/create-profile', [PelbagaiController::class, 'create_profile']);
        Route::put('/profile/{id}', [PelbagaiController::class, 'update_profile']);

        Route::get('/trail', [PelbagaiController::class, 'view_trail']);              

        Route::prefix('pokok')->group(function () {

            Route::get('/', [PokokController::class, 'senarai_pokok']);
            Route::get('/{id}', [PokokController::class, 'butir_pokok']);
            Route::post('/', [PokokController::class, 'cipta_pokok']);
            Route::put('/{id}', [PokokController::class, 'ubah_pokok']);        

        });    
        
        Route::prefix('tandan')->group(function () {

            Route::get('/', [TandanController::class, 'senarai_tandan']);
            Route::get('/{id}', [TandanController::class, 'butir_tandan']);
            Route::post('/', [TandanController::class, 'cipta_tandan']);
            Route::put('/{id}', [TandanController::class, 'ubah_tandan']);        
            
        });         
   

    });    
    
    Route::middleware(['role:worker'])->group(function () {

        Route::get('/bagging', [BaggingDataController::class, 'senarai_bagging']);
        Route::get('/bagging/{id}', [BaggingDataController::class, 'butir_bagging']);
        Route::post('/', [BaggingDataController::class, 'butir_bagging']);
        Route::put('/{id}', [BaggingDataController::class, 'ubah_bagging']);

        Route::get('/harvest', [HarvestController::class, 'senarai_harvest']);
        Route::get('/harvest/{id}', [HarvestController::class, 'butir_harvest']);
        Route::post('/', [HarvestController::class, 'butir_harvest']);
        Route::put('/{id}', [HarvestController::class, 'ubah_harvest']);        

    });    
    
    Route::middleware(['role:supervisor'])->group(function () {
            
    });   
    
    Route::middleware(['role:lab-worker'])->group(function () {
            
    });    
    
    Route::middleware(['role:lab-supervisor'])->group(function () {
            
    });       
    
    
});

Route::middleware(['auth:sanctum'])->prefix('api')->group(function () {

    Route::middleware(['role:worker'])->group(function () {
            
    });    
    
    Route::middleware(['role:supervisor'])->group(function () {
            
    });   
    
    Route::middleware(['role:lab-worker'])->group(function () {
            
    });    
    
    Route::middleware(['role:lab-supervisor'])->group(function () {
            
    });   

});


require __DIR__.'/auth.php';

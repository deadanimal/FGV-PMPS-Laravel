<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PelbagaiController;

Route::middleware(['auth'])->group(function () {

    Route::get('', [PelbagaiController::class, 'show_app']);

    Route::middleware(['role:admin'])->group(function () {

        Route::post('/reset', [UserController::class, 'reset']);
        Route::get('/trail', [UserController::class, 'view_trail']);        

        Route::prefix('pokok')->group(function () {

            Route::get('/', [PokokController::class, 'senarai_pokok']);
            Route::get('/{id}', [PokokController::class, 'butir_pokok']);
            Route::post('/', [PokokController::class, 'cipta_pokok']);
            Route::put('/{id}', [PokokController::class, 'ubah_pokok']);        

        });    
        
        Route::prefix('tandan')->group(function () {

            Route::get('/', [PokokController::class, 'senarai_pokok']);
            Route::get('/{id}', [PokokController::class, 'butir_pokok']);
            Route::post('/', [PokokController::class, 'cipta_pokok']);
            Route::put('/{id}', [PokokController::class, 'ubah_pokok']);        
            
        });         
   

    });  
    
    Route::middleware(['role:super-admin'])->group(function () {

        Route::post('/reset', [UserController::class, 'reset']);
        Route::get('/trail', [UserController::class, 'view_trail']);         
        Route::get('/profile', [UserController::class, 'search_profile']);
        Route::post('/signup', [UserController::class, 'signup']);
        Route::put('/profile/{id}', [UserController::class, 'update_profile']);

        Route::get('/trail', [UserController::class, 'view_trail']);

    });     
    
    Route::middleware(['role:worker'])->group(function () {
            
    });    
    
    Route::middleware(['role:supervisor'])->group(function () {
            
    });   
    
    Route::middleware(['role:lab-worker'])->group(function () {
            
    });    
    
    Route::middleware(['role:lab-supervisor'])->group(function () {
            
    });       
    
    // Route::get('/support/{id}', [SupportController::class, 'show']);
    // Route::post('/support/{id}/message', [SupportController::class, 'send_message']);
    
    
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

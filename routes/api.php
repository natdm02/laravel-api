<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::namespace('Api')
        ->prefix('projects')
        ->group(function(){
            Route::get('/', [ProjectController::class, 'index']);
            Route::get('/details/{slug}', [ProjectController::class, 'details']);
        });
Route::post('/contacts', [LeadController::class,'store']);

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TechnologyController;

// rotta di welcome
Route::get('/', function () {
    return view('welcome');
});

// rotta di autenticazione
Auth::routes();

// rotta della dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// gruppo di rotte per autenticazione

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource( 'projects', ProjectController::class );
    Route::resource('technologies', TechnologyController::class);
});


//rotta del logout

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

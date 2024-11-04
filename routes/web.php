<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;
use App\Http\Controllers\Admin\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('admin/projects', ProjectController::class);
});

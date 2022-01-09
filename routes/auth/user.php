<?php

use App\Http\Controllers\Auth\User\AuthController;
use Illuminate\Support\Facades\Route;


Route::name('auth.user.')->prefix('auth/user/')->group(function() {

    Route::post('login', [AuthController::class, 'authenticate'])->name('login');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

});


<?php

use App\Http\Controllers\RegistrationController;

Route::get('/register', [RegistrationController::class, 'show'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');


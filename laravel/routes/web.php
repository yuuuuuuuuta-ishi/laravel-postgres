<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'greeting' => 'Welcome to Laravel Inertia App'
    ]);
});
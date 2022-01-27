<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepage;

Route::get('home', [homepage::class, 'home'])
    ->name('homepage');

require __DIR__.'/auth.php';

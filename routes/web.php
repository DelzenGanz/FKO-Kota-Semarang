<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes for Forum Komunikasi OSIS Kota Semarang website
|
*/

// Home page route - displays landing page with all sections
Route::get('/', [HomeController::class, 'index'])->name('home');

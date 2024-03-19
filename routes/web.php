<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Create additional Routes below
Route::get('/properties', [DashboardController::class, 'index']);

Route::get('/properties/create', [PropertyController::class, 'create']);
Route::post('/properties', [PropertyController::class, 'store']);

Route::get('/properties/{property_id}', [PropertyController::class, 'show'])->name('properties.show');


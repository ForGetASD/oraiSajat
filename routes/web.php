<?php

use App\Http\Controllers\CarDetailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

    Route::get('/api/carDetails', [CarDetailController::class, 'index']);
    Route::get('/api/carDetails/{id}', [CarDetailController::class, 'show']);
    Route::delete('/api/carDetails/{id}', [CarDetailController::class, 'destroy']);
    Route::post('/api/carDetails/', [CarDetailController::class, 'store']);
    Route::put('/api/carDetails/{id}', [CarDetailController::class, 'update']);
    
<?php

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

// Rota para exibir o formulбrio de criaзгo de um evento
Route::get('/events/create', [EventController::class, 'create']);

// Rota para exibir um evento especнfico
Route::get('/events/{id}', [EventController::class, 'show']);

// Rota para salvar um evento
Route::post('/events', [EventController::class, 'store']);

Route::get('/contact', [EventController::class, 'contact']);

<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', function () { return redirect('/home');} );

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/lobby', [App\Http\Controllers\LobbyController::class, 'openLobby'])->name('lobby')->middleware('auth');

Route::post('/game', [App\Http\Controllers\GameController::class, 'startGame'])->name('game')->middleware('auth');
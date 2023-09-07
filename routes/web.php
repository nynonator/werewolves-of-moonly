<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\Counter as CountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function(){
    return view('home', ['name' => 'Player 1']);
});

Route::get('/counter', Counter::class);
Route::get('/counter-v2', [CountController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/', function () {
    return view('index');
});

Route::post('/create_game', [GameController::class, 'createGame']);

Route::post('/join_game', [GameController::class, 'checkPin']);
Route::post('/join_game/{game}', [GameController::class, 'joinGame']);Route::get('/game/{game}/{player}/get_players', [GameController::class, 'getPlayers']);

Route::get('/game/{game}/{player}/get_status', [GameController::class, 'getStatus']);
Route::get('/game/{game}/{player}/view_role', [GameController::class, 'viewRole']);
Route::get('/game/{game}/{player}/start', [GameController::class, 'startGame']);
Route::get('/game/{game}/{player}', [GameController::class, 'viewGame']);

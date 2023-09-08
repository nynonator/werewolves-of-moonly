<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;

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
    return view('home.index');
});

Route::get('/create_game', [GameController::class, 'createGame']);

Route::get('/join_game', function () {
    return view('signup.index');
});
Route::post('/join_game', [GameController::class, 'joinGame']);
Route::get('/game/{game}/{player}/get_players', [GameController::class, 'getPlayers']);
Route::get('/game/{game}/get_players', [GameController::class, 'adminGetPlayers']);

Route::get('/game/{game}/{player}/get_status', [GameController::class, 'getStatus']);
Route::get('/game/{game}/{player}/view_role', [GameController::class, 'viewRole']);
Route::get('/game/{game}/{player}/adminviewrole', [GameController::class, 'adminViewRole']);
Route::get('/game/{game}/start', [GameController::class, 'startGame']);
Route::get('/game/{game}/view_role', [GameController::class, 'adminViewRoles']);
Route::get('/game/{game}/{player}', [GameController::class, 'viewGame']);
Route::get('/game/{game}', [GameController::class, 'adminViewGame']);
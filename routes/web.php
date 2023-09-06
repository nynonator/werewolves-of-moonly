<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\Counter as CountController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function(){
    return view('home', ['name' => 'Player 1']);
});

Route::get('/counter', Counter::class);
Route::get('/counter-v2', [CountController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

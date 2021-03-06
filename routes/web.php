<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\FrameGuard;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/login',[AdminController::class,"LoginPage"]);
Route::post('/login',[AdminController::class,"LoginPage"]);
Route::resource('game',GameController::class);
Route::get('/testHome',function()
{
	return view('dashboard');
});
Route::get('/testAdmin',[AdminController::class,"AdminPage"]);
Route::get('/testAdmin/users',[AdminController::class,"UsersTable"]);
Route::get('/testAdmin/games',[AdminController::class,'GamesTable']);
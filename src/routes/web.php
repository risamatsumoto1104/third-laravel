<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenController;

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

Route::middleware('auth')->group(function(){
    Route::get('/', [AuthController::class, 'index']);
});

// URL'/fill'⇒ fillPenアクションの実行
Route::get('/fill', [PenController::class, 'fillPen']);
// URL'/create'⇒ createPenアクションの実行
Route::get('/create', [PenController::class, 'createPen']);
// URL'/insert'⇒ insertPenアクションの実行
Route::get('/insert', [PenController::class, 'insertPen']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UserController;
use App\Models\Board;

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

// トップ画面
Route::get('/', [TopController::class, 'top']);
// 一覧画面
Route::get('/board', [BoardController::class, 'index'])->name('board_index');
// 詳細画面
Route::get('/board/{id}', [BoardController::class, 'show'])->name('board_show');
// 投稿画面
Route::get('/create', [BoardController::class, 'create'])->name('board_create');
// 投稿機能
Route::post('/store', [BoardController::class, 'store']);
// // 削除画面
// Route::get('/delete/{id}',[BoardController::class,'delete']);
// // 削除機能
// Route::post('/delite/{id}', [BoardController::class, 'destroy']);
// AUTH
Auth::routes();
// ログインホーム
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ユーザー一覧
Route::get('user/index',[UserController::class,'index']);
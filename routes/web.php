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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('articles', App\Http\Controllers\articleController::class);
// リソースを使用しない場合
// Route::get('/articles', [App\Http\Controllers\articleController::class, 'index']);
// Route::get('/articles/create', [App\Http\Controllers\articleController::class, 'create']);
// Route::post('/articles', [App\Http\Controllers\articleController::class, 'store']);
// Route::get('/articles/{article}', [App\Http\Controllers\articleController::class, 'show']);
// Route::get('/articles/{article}/edit', [App\Http\Controllers\articleController::class, 'edit']);
// Route::patch('/articles/{article}', [App\Http\Controllers\articleController::class, 'update']);
// Route::delete('/articles/{article}', [App\Http\Controllers\articleController::class, 'destroy']);



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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//トップページに行くためのルーティング
Route::get('/',App\Http\Controllers\Data\IndexController::class);

//データの新規登録をするページに行くためのルーティング
Route::get('/create',App\Http\Controllers\Create\IndexController::class);
//データベースにデータの追加をするためのコードが実行されるルーティング
Route::post('/create',App\Http\Controllers\Create\CreateController::class);

//個別のデータのページに行くためのルーティング
Route::get('/{dataId}',App\Http\Controllers\Data\PageController::class);

//データを編集する操作のできるページに移動するためのルーティング
Route::get('/update/{dataId}',App\Http\Controllers\Update\IndexController::class);
//データを編集するためのコードが実行されるルーティング
Route::post('/update/{dataId}',App\Http\Controllers\Update\UpdateController::class);

//データを削除するコードが実行されるルーティング
Route::get('/delete/{dataId}',App\Http\Controllers\Delete\DeleteController::class);

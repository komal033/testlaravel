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
Route::get('/home/test', function () {
    return App::make('App\Http\Controllers\testcontroller')->index();
});


Route::get('/hello', function () {
    return "hello";
});

Route::get('/{url}', function ($url) {
    return App::make('App\Http\Controllers\testcontroller')->dynamic($url );
});
Route::post('/insert', [TestController::class,'insert'])->name('insert');

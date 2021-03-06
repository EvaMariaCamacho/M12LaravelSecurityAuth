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

//Route::get('/', function () {return view('layout');});


/*Route::get('/teams', function () {
    return view('teams');
});*/

Route::get('/', function () {
    return view('layout');
})->middleware(['auth'])->name('layout');

Route::resource('team', App\Http\Controllers\TeamController::class);

Route::resource('result', App\Http\Controllers\ResultController::class);

require __DIR__.'/auth.php';


Route::get('/cookie/set', [App\Http\Controllers\CookieController::class, 'setCookie']);
Route::get('/cookie/get', [App\Http\Controllers\CookieController::class, 'getCookie']);
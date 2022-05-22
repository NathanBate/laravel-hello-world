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

use App\Http\Controllers\HelloController;

Route::get('/hello', [ HelloController::class, 'index']);
Route::get('/hello/{customName}', [HelloController::class, 'name']);
Route::get('/hello/submit/name', function() {
   return View('hello.submit-name');
});
Route::post('/hello/add/name', [HelloController::class, 'addName']);


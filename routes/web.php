<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EpreuveController;


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
    return view('home');
});
Route::get('/list_lib', [MatiereController::class, 'index']);
Route::get('/list_ep', [EpreuveController::class, 'index']);
Route::get('/ajouter_lib', [MatiereController::class, 'create']);
Route::get('/ajouter_ep', [EpreuveController::class, 'create']);
Route::post('/store_ep', [EpreuveController::class, 'store']);
Route::post('/store_lib', [MatiereController::class, 'store']);

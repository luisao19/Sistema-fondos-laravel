<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FondosController;

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

Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('/fondos', function () {
    return view('fondos.index');
});


Route::get('fondos/create',[FondosController::class, 'create']);
*/
Route::resource('fondos',FondosController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [FondosController::class, 'index'])->name('home');

Route::get('fondos/pdf', function() {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [FondosController::class, 'index'])->name('home');

});
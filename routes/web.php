<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('cliente', UserController::class);
Route::get('/cliente/{idCliente}/info', [UserController::class,'info'])->name('cliente.info');
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard.dashboard');
Route::get('/example', function () {
    return view('example');
});

Route::get('/planes', function () {
    return view('dashboard.plan');
});
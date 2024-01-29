<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
//Route::post('users/create', [UserController::class,'create'])->name('users.create');
//Route::get('users/create', [UserController::class,'create'])->name('users.create');
//Route::get('users/index', [UserController::class,'index'])->name('users.index');
//Route::get('/users/{idCliente}/info', [UserController::class,'info'])->name('cliente.info');
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard.dashboard');

//Route::resource('plan', PlanController::class);

//show view for plans individual 
//Route::get('/plan/{idPlan}/info', [PlanController::class,'info'])->name('plan.info'); 
Auth::routes();
//Route::post('auth/login', [LoginController::class,'login'])->name('auth.login');
//Route::get('auth/login', [LoginController::class,'login'])->name('auth.login');
//Route::post('auth/create', [RegisterController::class,'create'])->name('auth.create');
//Route::get('auth/create', [RegisterController::class,'create'])->name('auth.create');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

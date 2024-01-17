<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Ruta para mostrar la lista de usuarios
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Ruta para mostrar el formulario de creación de usuario
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// Ruta para almacenar un nuevo usuario en la base de datos
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Ruta para mostrar un usuario específico

Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

// Ruta para mostrar el formulario de edición de usuario
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

// Ruta para actualizar un usuario en la base de datos
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
// Ruta para eliminar un usuario
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
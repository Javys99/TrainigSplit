<?php
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;

// Ruta para mostrar la lista de usuarios
Route::get('/plan', [PlanController::class, 'index'])->name('plan.index');

// Ruta para mostrar el formulario de creación de usuario
Route::get('/plan/create', [PlanController::class, 'create'])->name('plan.create');

// Ruta para almacenar un nuevo usuario en la base de datos
Route::post('/plan', [PlanController::class, 'store'])->name('plan.store');

// Ruta para mostrar un usuario específico

Route::get('/plan/{plan}', [PlanController::class, 'show'])->name('plan.show');

// Ruta para mostrar el formulario de edición de usuario
Route::get('/plan/{plan}/edit', [PlanController::class, 'edit'])->name('plan.edit');

// Ruta para actualizar un usuario en la base de datos
Route::put('/plan/{plan}', [PlanController::class, 'update'])->name('plan.update');
// Ruta para eliminar un usuario
Route::delete('/plan/{plan}', [PlanController::class, 'destroy'])->name('plan.destroy');
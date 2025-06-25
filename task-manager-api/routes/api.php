<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Ruta de prueba básica para asegurar que las rutas funcionan
Route::get('/prueba', function() {
    return response()->json(['ok' => true]);
});

// Rutas CRUD para tareas
Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);

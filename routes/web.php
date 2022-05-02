<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;
use App\Models\Nota;

// Notas
Route::get('/', [NotaController::class, 'index']);
Route::get('/registro_notas', [NotaController::class, 'create']);
Route::post('/notas', [NotaController::class, 'store']);
Route::get('/notas/{nota}/editar', [NotaController::class, 'edit']);
Route::put('/notas/{nota}', [NotaController::class, 'update']);
Route::delete('/eliminar/{nota}', [NotaController::class, 'destroy']);

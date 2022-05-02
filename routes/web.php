<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;
use App\Models\Nota;

// Notas
Route::get('/', [NotaController::class, 'index']);
Route::get('/registro_notas', [NotaController::class, 'create']);
Route::post('/notas', [NotaController::class, 'store']);
Route::delete('/eliminar/{nota}', [NotaController::class, 'destroy']);

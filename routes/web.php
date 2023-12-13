<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::resource('estudiantes', EstudianteController::class);
Route::resource('profesores', ProfesorController::class);
Route::resource('cursos', CursoController::class);
Route::resource('matriculas', MatriculaController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectosController;

Route::get('/', [ProyectosController::class, 'index']);
Route::resource('proyectos', ProyectosController::class);

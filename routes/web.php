<?php

use App\Http\Controllers\ProyectosController;

Route::get('/', [ProyectosController::class, 'index']);

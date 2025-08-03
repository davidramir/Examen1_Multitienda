<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MarcaController;


Route::apiResource('productos', ProductoController::Class);

Route::apiResource('marcas', MarcaController::Class);

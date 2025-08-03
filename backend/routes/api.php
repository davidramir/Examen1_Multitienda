<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MarcaController;


Route::apiResource('marcas', MarcaController::Class);

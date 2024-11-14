<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/perfil/{nome}", [ProfileController::class, 'show']);

Route::get("/produtos", [ProductController::class, 'index']);

Route::get("/produtos/{id}", [ProductController::class, 'show']);

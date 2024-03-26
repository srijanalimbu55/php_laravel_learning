<?php

use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;
use App\Models\UserModel;



Route::get('/', [welcomeController::class, 'index']);

Route::get('/news/{id}', [welcomeController::class, 'displayNews']);

// Route::get('/hi', [welcomeController::class, 'display']);
// Route::get('/hehe', [welcomeController::class, 'all']);


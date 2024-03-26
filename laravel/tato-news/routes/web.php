<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [welcomeController::class, 'index']);

Route::get('/news/{id}', function ($id) {
    return view('news', ['title' => 'hey', 'description' => 'yolo']);
});

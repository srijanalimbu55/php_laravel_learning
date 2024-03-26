<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route:: get('/', function() {
    $var1 = true;
    
    $news = [
        'pretol priced droped',
        'pretol priced droped',
        'pretol priced droped',

    ];
    $title = "Online Khabar";
    return view('welcome',['title' => $title, 'news' => $news, 'exp' => $var1
    ]);
});

Route::get('/news/{id}',function($id) {
    return response( $id);
});
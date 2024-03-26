<?php

use App\Models\Post;
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

Route::get('/', function () {

    // $post = new Post();
    // $post->title = "test1";   //insert into db
    // $post->save();

    $posts = Post::all(); // fetches all records from the posts table
    dd($posts);//  Dump and Die|| dump the fetched posts and halt the execution of the script
    
    
    return view('welcome');

});

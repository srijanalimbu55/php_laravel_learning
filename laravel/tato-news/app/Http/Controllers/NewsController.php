<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public static function index()
    {
       
        return view('welcome', ['news' => "sa"]);
    }

    public static function displayNews()
    {
        return view('news', ['title' => 'hey', 'description' => 'yolo']);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\UserModel;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public static function index() {
        //your logic here
        // return view('welcome', ['name'=> 'SEWARO🙏🙏']);
        return view('welcome', ['news' => UserModel::news()]);
    }
    public static function displayNews() {
        //your logic here
        // return view('welcome', ['name'=> 'SEWARO🙏🙏']);
        return view('news', ['page' => UserModel::page()]);
    }

    // public static function display() {
        
    //     return view('welcome', ['name'=> 'Peaceful']);
    // }

    // public static function all() {
        
    //     return response(UserModel::all());
    // }

    // public static function displayNews(){

    // }
}

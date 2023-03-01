<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    // page controller
    public function index(){
        return view('posts.index');
    }
}

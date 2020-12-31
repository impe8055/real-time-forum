<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $title = 'WELCOME TO MY WORLD, LARAVEL!!!';
        return view('pages.about')->with('title', $title);
    }
}

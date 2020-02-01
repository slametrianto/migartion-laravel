<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    public function index()
    {

        $articles = DB::table('articles')->get();

        // var_dump($articles);
        // dd($articles);


        // return view('home', compact('articles'));
        return view('home', ['articles' => $articles]);
    }
}

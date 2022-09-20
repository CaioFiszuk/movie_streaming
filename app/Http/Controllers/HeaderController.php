<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HeaderController extends Controller
{
    public function movies(){
        $movies = Movie::where('type', 'movie')->get();
 
        return view('home', compact('movies'));
     }
 
     public function series(){
         $movies = Movie::where('type', 'serie')->get();
 
         return view('home', compact('movies'));
     }
}

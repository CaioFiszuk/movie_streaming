<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class StreamingController extends Controller
{

    /**
     * Show data where streaming_id is 1
     * @return void
     */
    public function datatv(){
        $movies = Movie::where('streaming_id', 1)->get();

        return view('home', compact('movies'));
    }

    /**
     * Show data where streaming_id is 2
     * @return void
     */
    public function blackcat(){
        $movies = Movie::where('streaming_id', 2)->get();

        return view('home', compact('movies'));
    }

    /**
     * Show data where streaming_id is 3
     * @return void
     */
    public function creepy(){
        $movies = Movie::where('streaming_id', 3)->get();

        return view('home', compact('movies'));
    }
}

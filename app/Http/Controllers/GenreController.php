<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GenreController extends Controller
{
    /**
     * Shows data where movie genre is horror
     * @return void
     */
    public function horror()
    {
        $movies = Movie::where('genre', 'horror')->get();

        return view('home', compact('movies'));
    }

    /**
     * Shows data where movie genre is noir
     * @return void
     */
    public function noir()
    {
        $movies = Movie::where('genre', 'noir')->get();

        return view('home', compact('movies'));
    }

    /**
     * Shows data where movie genre is faith
     * @return void
     */
    public function faith()
    {
        $movies = Movie::where('genre', 'faith')->get();

        return view('home', compact('movies'));
    }

    /**
     * Shows data where movie genre is thriller
     * @return void
     */
    public function thriller()
    {
        $movies = Movie::where('genre', 'thriller')->get();

        return view('home', compact('movies'));
    }

    /**
     * Shows data where movie genre is drama
     * @return void
     */
    public function drama()
    {
        $movies = Movie::where('genre', 'drama')->get();

        return view('home', compact('movies'));
    }

    /**
     * Shows data where movie genre is adventure
     * @return void
     */
    public function adventure()
    {
        $movies = Movie::where('genre', 'adventure')->get();

        return view('home', compact('movies'));
    }

    /**
     * Shows data where movie genre is scifi
     * @return void
     */
    public function scifi()
    {
        $movies = Movie::where('genre', 'scifi')->get();

        return view('home', compact('movies'));
    }

    /**
     * Shows data where movie genre is hero
     * @return void
     */
    public function hero()
    {
        $movies = Movie::where('genre', 'hero')->get();

        return view('home', compact('movies'));
    }
}

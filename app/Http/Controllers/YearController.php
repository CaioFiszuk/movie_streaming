<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class YearController extends Controller
{
    /**
     * Show data where year is between 1960 and 1969
     * @return void
     */
    public function sixties(){
        $movies = Movie::whereBetween('year', [1960, 1969])->get();

        return view('home', compact('movies'));
    }

    /**
     * Show data where year is between 1970 and 1979
     * @return void
     */
    public function seventies(){
        $movies = Movie::whereBetween('year', [1970, 1979])->get();

        return view('home', compact('movies'));
    }

    /**
     * Show data where year is between 1980 and 1989
     * @return void
     */
    public function eighties(){
        $movies = Movie::whereBetween('year', [1980, 1989])->get();

        return view('home', compact('movies'));
    }

    /**
     * Show data where year is between 1990 and 1999
     * @return void
     */
    public function nineties(){
        $movies = Movie::whereBetween('year', [1990, 1999])->get();

        return view('home', compact('movies'));
    }

    /**
     * Show data where year is between 2000 and 2009
     * @return void
     */
    public function twenties(){
        $movies = Movie::whereBetween('year', [2000, 2009])->get();

        return view('home', compact('movies'));
    }

    /**
     * Show data where year is between 2010 and 2020
     * @return void
     */
    public function ten(){
        $movies = Movie::whereBetween('year', [2010, 2020])->get();

        return view('home', compact('movies'));
    }

    /**
     * Show data where year is between 2010 and 2020
     * @return void
     */
    public function twenty(){
        $movies = Movie::whereBetween('year', [2021, date('Y')])->get();

        return view('home', compact('movies'));
    }
}

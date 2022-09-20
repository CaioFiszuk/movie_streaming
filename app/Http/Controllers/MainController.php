<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Classes\HideId;
use Illuminate\Http\Request;

class MainController extends Controller
{
   /**
    * Show the main page
    * @return void
    */
    public function index()
    {
      return view('welcome');
    }

    /**
     * Show info of a specific movie
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        $revealed = HideId::reveal($id);   
        $movies = Movie::find($revealed);

        return view('show', compact('movies'));
    }
}

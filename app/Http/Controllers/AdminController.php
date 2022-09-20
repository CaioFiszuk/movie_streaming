<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Movie;
use PDOException;

class AdminController extends Controller
{
    /**
     * Show the admin page
     * @return void
     */
    public function adminPage()
    {

        if(Gate::denies('access-admin'))
        {
         abort('403');
        }

        $movies = Movie::paginate(20);
        return view('admin.admin', compact('movies'));
    }

    /**
     * Create a new data in the database
     * @param Request $request
     * @return void
     */
    public function createMovie(Request $request)
    {
      $year = date('Y');
      $request->validate([
        'name'=>['required'],
        'type'=>['required'],
        'year'=>['required', "between:1960,$year"],
        'synopsis'=>['required'],
        'genre'=>['required'],
        'path'=>['required', 'image'],
        'streaming_id'=>['required']
      ]);

       try
       {
          $file = $request->file('path');
          $path = '/'.$file->store('covers', 'public');

          Movie::create([
             'name'=>$request->input('name'),
             'type'=>$request->input('type'),
             'year'=>$request->input('year'),
             'synopsis'=>$request->input('synopsis'),
             'genre'=>$request->input('genre'),
             'path'=>asset('storage').$path,
             'streaming_id'=>$request->input('streaming_id')
          ]);

          return redirect()->back();
       }
       catch(PDOException $e)
       {
          return $e->getMessage();
       }
    }

    /**
     * Show the update page of the admin
     * @param int $id
     * @return void
     */
    public function updatePage($id)
    {
      $movie = Movie::find($id);

      return view('admin.update_page', compact('movie'));
    }

    /**
     * Update a data in the database
     * @param Request $request
     * @return void
     */
    public function updateMovie(Request $request)
    {
      try
      {
         $id = $request->input('id');
         $movies = Movie::find($id);

         $file = $request->file('path');
         $path = '/'.$file->store('covers', 'public');

         $movies->name = $request->input('name');
         $movies->type = $request->input('type');
         $movies->year = $request->input('year');
         $movies->synopsis = $request->input('synopsis');
         $movies->genre = $request->input('genre');
         $movies->path = asset('storage').$path;
         $movies->streaming_id = $request->input('streaming_id');

         $movies->save();

         return redirect()->route('admin.page');
      }
      catch(PDOException $e)
      {
         return $e->getMessage();
      }
    }

     /**
     * Delete a data in the database
     * @param int $id
     * @return void
     */
    public function deleteMovie($id)
    {
        Movie::destroy($id);

        return redirect()->back();
    }

    /**
     * Search field of database
     * @param Request $request
     * @return void
     */
    public function search(Request $request)
    {
      $q = $request->input('q');
 
      $movies = Movie::where('name', 'like', "%$q%")->orWhere('year', 'like', "%$q%")->orWhere('synopsis', 'like', "%$q%")->get();
 
      return view('admin.admin', compact('movies'));
    } 
}

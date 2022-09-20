<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StreamingController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(MainController::class)->group(function(){
   Route::get('/', 'index')->name('index');
   Route::get('/show/{id}', 'show')->name('show');
});

Route::controller(GenreController::class)->group(function(){
   Route::get('/horror', 'horror')->name('horror');
   Route::get('/noir', 'noir')->name('noir');
   Route::get('/faith', 'faith')->name('faith');
   Route::get('/thriller', 'thriller')->name('thriller');
   Route::get('/drama', 'drama')->name('drama');
   Route::get('/adventure', 'adventure')->name('adventure');
   Route::get('/scifi', 'scifi')->name('scifi');
   Route::get('/hero', 'hero')->name('hero');
});

Route::controller(HeaderController::class)->group(function(){
   Route::get('/movies', 'movies')->name('movies');
   Route::get('/series', 'series')->name('series');
});

Route::controller(StreamingController::class)->group(function(){
   Route::get('/blackcat', 'blackcat')->name('blackcat');
   Route::get('/datatv', 'datatv')->name('datatv');
   Route::get('/creepy', 'creepy')->name('creepy');
});

Route::controller(YearController::class)->group(function(){
   Route::get('/60', 'sixties')->name('sixties');
   Route::get('/70', 'seventies')->name('seventies');
   Route::get('/80', 'eighties')->name('eighties');
   Route::get('/90', 'nineties')->name('nineties');
   Route::get('/00', 'twenties')->name('twenties');
   Route::get('/10', 'ten')->name('ten');
   Route::get('/20', 'twenty')->name('twenty');
});

Route::controller(AdminController::class)->group(function(){
   Route::get('admin_page', 'adminPage')->name('admin.page');
   Route::post('/create_movie', 'createMovie')->name('create.movie');
   Route::get('/update_page/{id}', 'updatePage')->name('update.page');
   Route::post('/update_movie', 'updateMovie')->name('update.movie');
   Route::get('delete_movie/{id}', 'deleteMovie')->name('delete.movie');
   Route::get('/search', 'search')->name('search');
});

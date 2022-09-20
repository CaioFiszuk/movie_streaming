@extends('layouts.app')

@section('content')

<h2 class="text-center">Update</h2>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form action="{{route('update.movie')}}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{$movie->id}}">
   
                <input type="text" name="name" class="form-control mb-2" placeholder="Movie name" value="{{$movie->name}}">
   
                <div class="form-check mb-2">
                   <input class="form-check-input" type="radio" name="type" value="movie">
                   <label class="form-check-label">
                     Movie
                   </label>
                 </div>
                 <div class="form-check mb-2">
                   <input class="form-check-input" type="radio" name="type" value="serie">
                   <label class="form-check-label">
                     Serie
                   </label>
                 </div>
   
                <input type="text" name="year" class="form-control mb-2" placeholder="Year" value="{{$movie->year}}">
   
                <textarea name="synopsis" cols="30" rows="10" class="mb-2">{{$movie->synopsis}}</textarea>
   
                 <select name="genre" class="form-select mb-2">
                   <option selected>Genre</option>
                   <option value="horror">Horror</option>
                   <option value="noir">Noir</option>
                   <option value="faith">Faith</option>
                   <option value="thriller">Thriller</option>
                   <option value="drama">Drama</option>
                   <option value="adventure">Adventure</option>
                   <option value="scifi">Sci-Fi</option>
                   <option value="hero">Hero</option>
                 </select>
   
                 <input type="file" name="path" class="form-control mb-2">
   
                 <select name="streaming_id" class="form-select mb-2">
                   <option selected>Streaming</option>
                   <option value="1">Blackcat</option>
                   <option value="2">Data tv</option>
                   <option value="3">Creepy tv</option>
                 </select>
   
                <input type="submit" value="Update" class="btn btn-success">
              </form>
        </div>
    </div>
</div>

@endsection
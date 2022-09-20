@extends('layouts.app')

@section('content')

  <div class="d-flex justify-content-between">
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#window">Add a movie</button>

      <form action="{{route('search')}}" method="get" class="d-flex">
        @csrf
        <input type="text" name="q" class="form-control">
        <input type="submit" value="Search" class="btn btn-secondary">
      </form>
  </div>

    @include('includes.modal')

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Synopsis</th>
                <th>Year</th>
                <th>Type</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
              <tr>
                 <td>{{$movie->name}}</td>
                 <td>{{$movie->synopsis}}</td>
                 <td>{{$movie->year}}</td>
                 <td>{{$movie->type}}</td>
                 <td>{{$movie->genre}}</td>
                 <td>
                    <a href="{{route('update.page', ['id'=>$movie->id])}}" class="btn btn-success">Update</a>
                 </td>
                 <td>
                   <a href="{{route('delete.movie', ['id'=>$movie->id])}}" class="btn btn-danger">Delete</a>
                 </td>
              </tr>
            @endforeach
        </tbody>
    </table>

    @if ($errors->any())
      @foreach ($errors->all() as $error)
        <ul>
          <li class="alert alert-danger">{{$error}}</li>
        </ul>
      @endforeach
   @endif

    @if($movies->count()>=20)
      {{$movies->links()}}
    @endif
@endsection
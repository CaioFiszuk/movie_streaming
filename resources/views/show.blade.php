@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-4 mt-3">
            <img src="{{asset($movies->path)}}" height="200" width="150" class="mb-2">
            <h4>{{$movies->name}} ({{$movies->year}})</h4>
            <span>You can find on: {{$movies->streaming->nome}}</span>
            <hr>
            <span>Synopsis: {{$movies->synopsis}}</span>
             <hr>
            <span>Genre: {{$movies->genre}}</span>
        </div>
    </div>
</div>

@endsection
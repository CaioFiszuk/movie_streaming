@extends('layouts.app')

@php
  use App\Classes\HideId;   
@endphp

@section('content')

@include('includes.menu')

<div class="container d-flex flex-wrap">      
        
    @foreach ($movies as $movie)
        <a href="{{route('show', ['id'=>HideId::hide($movie->id)])}}"><img src="{{asset($movie->path)}}" height="200" width="150"></a>
    @endforeach
   
</div>
@endsection

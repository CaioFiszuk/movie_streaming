<nav class="navbar navbar-expand bg-secondary mb-4">

    <ul class="navbar-nav">
        <li class="nav-item p-3">
           <a href="{{route('movies')}}" class="nav-link text-light">Movies</a>
        </li>
  
        <li class="nav-item p-3">
           <a href="{{route('series')}}" class="nav-link text-light">Series</a>
        </li>
     </ul>

     <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          Releasing Year
        </button>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
          <li><a class="dropdown-item" href="{{route('sixties')}}">60's</a></li>
          <li><a class="dropdown-item" href="{{route('seventies')}}">70's</a></li>
          <li><a class="dropdown-item" href="{{route('eighties')}}">80's</a></li>
          <li><a class="dropdown-item" href="{{route('nineties')}}">90's</a></li>
          <li><a class="dropdown-item" href="{{route('twenties')}}">00's</a></li>
          <li><a class="dropdown-item" href="{{route('ten')}}">10's</a></li>
          <li><a class="dropdown-item" href="{{route('twenty')}}">20's</a></li>
        </ul>
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          Genre
        </button>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
          <li><a class="dropdown-item" href="{{route('horror')}}">Horror</a></li>
          <li><a class="dropdown-item" href="{{route('noir')}}">Noir</a></li>
          <li><a class="dropdown-item" href="{{route('faith')}}">Faith</a></li>
          <li><a class="dropdown-item" href="{{route('thriller')}}">Thriller</a></li>
          <li><a class="dropdown-item" href="{{route('drama')}}">Drama</a></li>
          <li><a class="dropdown-item" href="{{route('adventure')}}">Adventure</a></li>
          <li><a class="dropdown-item" href="{{route('scifi')}}">Sci-fi</a></li>
          <li><a class="dropdown-item" href="{{route('hero')}}">Hero</a></li>
        </ul>
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          Streaming
        </button>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
          <li><a class="dropdown-item" href="{{route('blackcat')}}">Black Cat Tv</a></li>
          <li><a class="dropdown-item" href="{{route('datatv')}}">Data Tv</a></li>
          <li><a class="dropdown-item" href="{{route('creepy')}}">Creepy Tv</a></li>
        </ul>
      </div>

</nav>
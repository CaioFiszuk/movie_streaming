<nav class="navbar bg-dark">
    <div class="container">

        <a class="navbar-brand text-white" href="{{ url('/home') }}">
            {{ config('app.name') }}
        </a>

            <ul class="nav nav-pills">

                @isset(auth()->user()->admin)
                  @if(auth()->user()->admin)  
                    <li class="nav-item">
                      <a class="nav-link text-white" href="{{ route('admin.page') }}">{{ __('Admin Page') }}</a>
                    </li>
                  @endif
                @endisset
                
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                            <a class="text-white" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </li>
                @endguest
            </ul>
    </div>
</nav>

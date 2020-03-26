<!-- Default Boostrap Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Blog</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
   </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
            <a class="nav-link {{Request::is('/') ? "active" : ""}}" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{Request::is('blog') ? "active" : ""}}" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Request::is('posts') ? "active" : ""}}" href="/posts">All Posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Request::is('about') ? "active" : ""}}" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Request::is('contact') ? "active" : ""}}" href="/contact">Contact</a>
        </li>

    </ul>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>

</nav>
@extends('template')

@section('title','Usher and Greeter - Members')

@section('content')

<header id="header1">
  <div class="container">

    <div id="logo" class="pull-left">
      <h1><a href="/">The <span>Feast</span></a></h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        @guest
        <li><a href="/">Home</a></li>
        <li><a href="/">About</a></li>
        <li><a href="/">Builders</a></li>
        <li><a href="/">Venue</a></li>
        <li><a href="/">Gallery</a></li>
        <li><a href="/">Contact</a></li>
        <li><a href="/login">Login</a></li>

        @else
        <li><a href="/">Home</a></li>
        <li><a href="/">About</a></li>
        <li><a href="/">Builders</a></li>
        <li><a href="/">Venue</a></li>
        <li><a href="/">Gallery</a></li>
        <li><a href="/">Contact</a></li>
        <li><a href="/teams">Teams</a></li>
        <li class="menu-active"><a href="/users">Members</a></li>
        <li><a href="/roles">Roles</a></li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->firstname }} <span class="caret"></span>
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
</div>
</header>

<main id="main">

  <section id="speakers" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Feast Bay Area Servants</h2>
        <p>AM Session</p>
      </div>

      <div class="row">
        @foreach($users as $user)
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="{{ $user->image_path }}" alt="Speaker 1" class="img-fluid">
            <div class="details">
              <h3><a href="#">{{ $user->firstname }} {{ $user->lastname }}</a></h3>
              <p>Happy to serve!!</p>
            </div>
          </div>
        </div>
        @endforeach            
      </div>
    </div>

  </section>

</main>

@endsection
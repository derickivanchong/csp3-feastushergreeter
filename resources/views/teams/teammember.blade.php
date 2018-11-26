@extends('template')

@section('title','Usher and Greeter')

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
        <h2>{{ $team->name_of_team }}</h2>
        <p>{{ $team->description }}</p>
      </div>


      <div class="row">
        @foreach($team->users as $user)
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="{{ $user->image_path }}" alt="Member 1" class="img-fluid">
            <div class="details">
              <h3><a href="speaker-details.html">{{ $user->firstname }} {{$user->middlename}} {{ $user->lastname }}</a></h3>
              <p>{{ $team->description }}</p>
              <div class="social">
                <a href="" data-toggle="modal" data-target="#exampleModal{{ $user->id }}">Move</a>                    
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $team->name_of_team }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" action="/teams/moveuser/{{ $user->id }}">
                {{ csrf_field() }}
                <div class="modal-body">
                  <div class="form-group">
                    <label>Choose Team</label>
                    <select class="form-control" name="chooseteam">
                      @foreach($teams as $userteam)
                      <option value="{{ $userteam->id }}">{{ $userteam->name_of_team }}</option>
                      @endforeach
                    </select>
                  </div>
                  Move {{ $user->firstname }} {{ $user->lastname }} to what team?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="deleteTeam btn btn-danger">Move</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>

  </main>

  @endsection

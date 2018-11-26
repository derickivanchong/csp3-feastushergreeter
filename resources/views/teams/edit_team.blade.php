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

  <div class="container">
    <div class="row">
      <div class="col-lg-4 mt-5" style="padding: 110px 0px 110px 0px;">

        <form method="POST" action="/teams/edit/{{ $team->id }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label>Team Name:</label>
            <input type="text" name="editteamname" class="form-control" value="{{ $team->name_of_team }}">
          </div>

          <div class="form-group">
            <label>Team Description:</label>
            <input type="text" name="editteamdescription" class="form-control" value="{{ $team->description }}">
          </div>

          <div class="form-group">
            <label>Team Image:</label>
            <input type="file" name="editteamimage" class="form-control">
          </div>

          <div>
            <button type="submit" class="btn btn-success form-control">Update</button>
          </div>

        </form>
      </div>
    </div>
  </div>

</main>

@endsection
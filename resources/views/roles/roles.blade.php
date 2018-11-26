@extends('template')

@section('title','Usher and Greeter - Roles')

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
    <li><a href="/users">Members</a></li>
    <li class="menu-active"><a href="/roles">Roles</a></li>
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
    <h2>Our Roles for the Ministry</h2>
    <p>Here are our Members</p>
  </div>

  <div class="row">
    @foreach($roles as $role)
    <div class="col-lg-4 col-md-6">
     <div class="speaker">
      <img src="{{ $role->image_path }}" alt="Speaker 1" class="img-fluid">
      <div class="details">
        <h3><a href="#">{{ $role->name_of_role }}</a></h3>
        @if(Auth::user()->role_id == 1)
        <div class="social">
          <a href="/roles/edit/{{ $role->id }}">Edit</a>
          <a href="" data-toggle="modal" data-target="#exampleModal{{ $role->id }}">Delete</a>
        </div>
        @else

        @endif
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">{{ $role->name_of_role }}</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   <div class="modal-body">
    Are you sure you want to delete {{ $role->name_of_role }}?
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <form method="POST" action="/roles/delete/{{ $role->id }}">
     {{ csrf_field() }}
     {{ method_field('DELETE') }}
     <button type="submit" class="deleteTeam btn btn-danger" data-id={{ $role->id }}>Delete</button>
   </form>
 </div>
</div>
</div>
</div>
@endforeach   				
</div>
</div>
</section>

@if(Auth::user()->role_id == 1)
<section id="subscribe">
  <div class="container wow fadeInUp">        
   <form method="POST" action="/addRoles">
    @csrf
    <div class="form-row justify-content-center">
     <div class="row">              
      <div class="col-lg-12" style="padding-left: 5px;">
       <input type="text" name="rolename" class="form-control" placeholder="Name of Role:">
     </div>
   </div>
   <div class="row">
    <div class="col-lg-12">
     <input type="file" name="rolepicture" class="form-control" placeholder="Image of Team">
   </div>
 </div>
 <div class="col-auto">
  <button type="submit">Add New Role</button>
</div>
</div>
</form>

</div>
</section>
@else

@endif      
</main>

@endsection
@extends('template')

@section('title','Usher and Greeter')

@section('content')

<header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <h1><a href="#main">The <span>Feast</span></a></h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        @guest
        <li class="menu-active"><a href="#intro">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#speakers">Builders</a></li>
        <li><a href="#venue">Venue</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="/login">Login</a></li>

        @else
        <li class="menu-active"><a href="#intro">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#speakers">Builders</a></li>
        <li><a href="#venue">Venue</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="/teams">Teams</a></li>
        <li><a href="/users">Members</a></li>
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

<section id="intro">
  <div class="intro-container wow fadeIn">
    <h1 class="mb-4 pb-0">The Weekly<br>Gathering Of The <br>Light of <span>Jesus</span> Family</h1>
    <p class="mb-4 pb-0">Every Sunday - 8:00AM and 10:30AM, Philippine Internation Convention Center, Pasay City</p>
    <a href="#about" class="about-btn scrollto">About The Event</a>
  </div>
</section>

<main id="main">

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>About The Feast</h2>
          <p>We reached out to the unchurched. We became a messy group loving messy people. Today, there are 285 of these Feasts scattered all over the world, bringing thousands of unchurched people back home to God.</p>
        </div>
        <div class="col-lg-3">
          <h3>Where</h3>
          <p>Philippine International Convention Center, Pasay City</p>
        </div>
        <div class="col-lg-3">
          <h3>When</h3>
          <p>Every Sunday<br>8:00AM and 10:30AM</p>
        </div>
      </div>
    </div>
  </section>

  <section id="speakers" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>The People Behind</h2>
        <p>Here are some of our Leaders</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="img/speakers/9.jpg" alt="Speaker 1" class="img-fluid">
            <div class="details">
              <h3><a href="#speakers">Bo Sanchez</a></h3>
              <p>Feast Preacher - 8AM and 10AM</p>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="img/speakers/audee1.jpg" alt="Speaker 2" class="img-fluid">
            <div class="details">
              <h3><a href="#speakers">Audee Villaraza</a></h3>
              <p>Feast Builder - 8AM and 10AM</p>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="img/speakers/mikeanj.jpg" alt="Speaker 3" class="img-fluid">
            <div class="details">
              <h3><a href="#speakers">Michael Co</a></h3>
              <p>Ministry Head - 8AM and 10AM</p>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="img/speakers/tinmigs.jpg" alt="Speaker 5" class="img-fluid">
            <div class="details">
              <h3><a href="#speakers">Kristine Lozada</a></h3>
              <p>Ministry Head - 8AM and 10AM</p>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="img/speakers/miraypaul.jpg" alt="Speaker 4" class="img-fluid">
            <div class="details">
              <h3><a href="#speakers">Paul Vincent Chua</a></h3>
              <p>Assitant Ministry Head - 8AM and 10AM</p>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="img/speakers/mildred.jpg" alt="Speaker 6" class="img-fluid">
            <div class="details">
              <h3><a href="#speakers">Mildred Pescadero</a></h3>
              <p>Assistant Ministry Head - 8AM and 10AM</p>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>    

  <section id="venue" class="wow fadeInUp">

    <div class="container-fluid">

      <div class="section-header">
        <h2>Event Venue</h2>
        <p>Event venue location info and gallery</p>
      </div>

      <div class="row no-gutters">
        <div class="col-lg-6 venue-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.7838849767627!2d120.98055391483972!3d14.554347689831964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cbd95b3871e1%3A0xdecebc46f2b58867!2sPhilippine+International+Convention+Center!5e0!3m2!1sen!2sph!4v1542028126124" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6 venue-info">
          <div class="row justify-content-center">
            <div class="col-11 col-lg-8">
              <h3>PICC, Pasay City</h3>
              <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container-fluid venue-gallery-container">
      <div class="row no-gutters">

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
            <a href="img/venue-gallery/gallery1.jpg" class="venobox" data-gall="venue-gallery">
              <img src="img/venue-gallery/gallery1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
            <a href="img/venue-gallery/gallery2.jpg" class="venobox" data-gall="venue-gallery">
              <img src="img/venue-gallery/gallery2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
            <a href="img/venue-gallery/gallery6.jpg" class="venobox" data-gall="venue-gallery">
              <img src="img/venue-gallery/gallery6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
            <a href="img/venue-gallery/gallery7.jpg" class="venobox" data-gall="venue-gallery">
              <img src="img/venue-gallery/gallery7.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
            <a href="img/venue-gallery/gallery3.jpg" class="venobox" data-gall="venue-gallery">
              <img src="img/venue-gallery/gallery3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
            <a href="img/venue-gallery/gallery10.jpg" class="venobox" data-gall="venue-gallery">
              <img src="img/venue-gallery/gallery10.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
            <a href="img/venue-gallery/gallery8.jpg" class="venobox" data-gall="venue-gallery">
              <img src="img/venue-gallery/gallery8.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
            <a href="img/venue-gallery/gallery9.jpg" class="venobox" data-gall="venue-gallery">
              <img src="img/venue-gallery/gallery9.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>    

  <section id="gallery" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Gallery</h2>
        <p>Check our gallery from the recent events</p>
      </div>
    </div>
    <div class="owl-carousel gallery-carousel">
      <a href="img/gallery/17.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('img/gallery/17.jpg') }}" alt=""></a>
      <a href="img/gallery/99.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/99.jpg" alt=""></a>
      <a href="img/gallery/10.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/10.jpg" alt=""></a>
      <a href="img/gallery/16.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/16.jpg" alt=""></a>
      <a href="img/gallery/18.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/18.jpg" alt=""></a>
      <a href="img/gallery/19.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/19.jpg" alt=""></a>
      <a href="img/gallery/14.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/14.jpg" alt=""></a>
      <a href="img/gallery/15.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/15.jpg" alt=""></a>
    </div>
  </section>    

  
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h2>Newsletter</h2>
        <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
      </div>

      <form method="POST" action="#">
        <div class="form-row justify-content-center">
          <div class="col-auto">
            <input type="text" class="form-control" placeholder="Enter your Email">
          </div>
          <div class="col-auto">
            <button type="submit">Subscribe</button>
          </div>
        </div>
      </form>

    </div>
  </section>    

  <section id="contact" class="section-bg wow fadeInUp">

    <div class="container">

      <div class="section-header">
        <h2>Contact Us</h2>
        <p>Ready to Serve God?</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Address</h3>
            <address>Philippine International Convention Center</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+155895548855">+63 906 577 7777</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com">info@example.com</a></p>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>
@endsection

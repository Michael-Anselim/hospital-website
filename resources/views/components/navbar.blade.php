<!-- Start menu -->
<section id="mu-menu">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- LOGO -->
        <!-- TEXT BASED LOGO -->
        <!-- <div style="display: inline-flex;">
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/logo1.png')}}" alt="Logo" width="50"></a>
          <h2 style="font-weight:bold; text-align:baseline;">Rhotia Health Centre</h2>
        </div> -->

        <a class="navbar-brand" href="{{ url('/') }}">
          <i><img src="{{ asset('assets/img/logo1.png') }}" alt="Logo" width="50" /></i>
          <span class="navbar-text" style="font-weight: bold; color:black;">Rhotia Health Centre</span>
        </a>


        <!-- IMG BASED LOGO  -->
        <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          <x-nav-link route_name="welcome">Home</x-nav-link>
          <x-nav-link route_name="services">Our Services</x-nav-link>
          <x-nav-link route_name="gallery">Gallery</x-nav-link>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><x-nav-link route_name="whoweare">Who We Are</x-nav-link></li>
              <li><x-nav-link route_name="missionandvision">Mission And Vision</x-nav-link></li>
            </ul>
          </li>
          <x-nav-link route_name="contact">Contact</x-nav-link>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get Involved <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><x-nav-link route_name="joinus">Join Us Through Donation</x-nav-link></li>
              <li><x-nav-link route_name="projects">Ongoing Projects</x-nav-link></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
</section>
<!-- End menu -->
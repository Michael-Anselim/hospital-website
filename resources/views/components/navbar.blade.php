<!-- Start menu -->
<section id="mu-menu">
  <nav class="navbar navbar-default navbar-expand-lg bg-white border-bottom m-0 ">
    <div class="container-fluid">
      <!-- LOGO -->
      <a class="navbar-brand ms-5" href="{{ route('welcome') }}"><i class="fa fa-university text-primary"></i></a>
      
      <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">
        <ul id="top-menu" class="navbar-nav ms-auto mb-2 mb-lg-0">
          <x-nav-link route_name="welcome">Home</x-nav-link>
          <x-nav-link route_name="gallery.index">Gallery</x-nav-link>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><x-nav-link route_name="welcome">Service 1</x-nav-link></li>
              <li><x-nav-link route_name="welcome">Service 2</x-nav-link></li>
            </ul>
          </li>
          <x-nav-link route_name="contact.index">Contact</x-nav-link>
          <x-nav-link route_name="blog.index">Blog</x-nav-link>
          <x-nav-link route_name="login">Login</x-nav-link>
        </ul>
      </div>
    </div>
  </nav>
</section>
<!-- End menu -->

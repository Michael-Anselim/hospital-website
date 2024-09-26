<nav class="navbar navbar-expand-lg bg-light shadow-lg">
  <div class="container">
    <a class="navbar-brand" href="{{route('welcome')}}">
      <img src="images/logo.png" class="logo img-fluid" alt="Rhotia Health Centre Logo">
      <span>
        Rhotia Health Centre
      </span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

          <x-nav-link  route_name="welcome">Home</x-nav-link>

          <x-nav-link  route_name="about">About</x-nav-link>

          <x-nav-link  route_name="services">Services</x-nav-link>

          <x-nav-link  route_name="gallery">Work with us</x-nav-link>

          <x-nav-link  route_name="volunteer">Volunteer</x-nav-link>

          <x-nav-link  route_name="contact">Contact</x-nav-link>
      
        <li class="nav-item ms-3">
          <a class="nav-link custom-btn custom-border-btn btn {{ request()->routeIs('donate') ? 'bg-donate text-white' : '' }}" href="{{route('donate')}}">Donate</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
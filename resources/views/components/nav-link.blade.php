@props(['route_name'])

<li class="nav-item">
    <a href="{{ route($route_name) }}" class="nav-link {{ request()->routeIs($route_name) ? 'active' : '' }}">
        {{ $slot }}
    </a>
</li>
     
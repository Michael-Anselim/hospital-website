@props(['route_name'])

<li class="nav-item {{ request()->routeIs($route_name) ? 'active' : '' }}">
    <a href="{{ route($route_name) }}" class="nav-link">
        {{ $slot }}
    </a>
</li>

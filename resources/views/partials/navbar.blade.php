<nav class="navbar">
    <div class="container">
        <a href="#" class="logo">SEA Catering</a>
        {{-- <a href="{{ route('home') }}" class="logo">SEA Catering</a> --}}
        <button class="navbar-toggle" id="navbar-toggle">&#9776;</button>
        <ul class="navbar-links" id="navbar-links">
            <li><a href="#" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="#" class="{{ Request::is('menu') ? 'active' : '' }}">Menu</a></li>
            <li><a href="#" class="{{ Request::is('subscribe') ? 'active' : '' }}">Subscription</a></li>
            <li><a href="#contact" class="{{ Request::is('#contact') ? 'active' : '' }}">Contact Us</a></li>
        </ul>
        {{-- <ul class="navbar-links" id="navbar-links">
            <li><a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('menu') }}" class="{{ Request::is('menu') ? 'active' : '' }}">Menu</a></li>
            <li><a href="{{ route('subscribe') }}" class="{{ Request::is('subscribe') ? 'active' : '' }}">Subscription</a></li>
            <li><a href="#contact" class="{{ Request::is('#contact') ? 'active' : '' }}">Contact Us</a></li>
        </ul> --}}
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="logo" href="{{ url('/') }}">
            HackerPair
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    {{ link_to_route('locations.index', 'Locations', [], ['class' => 'nav-link']) }}
                </li>
                <li class="nav-item">
                    {{ link_to_route('events.index', 'Events', [], ['class' => 'nav-link']) }}
                </li>
                <li class="nav-item">
                    {{ link_to_route('languages.index', 'Languages', [], ['class' => 'nav-link']) }}
                </li>
                <li class="nav-item">
                    {{ link_to_route('maps.index', 'Map', [], ['class' => 'nav-link']) }}
                </li>
                <li class="nav-item">
                    {{ link_to_route('about.index', 'About', [], ['class' => 'nav-link']) }}
                </li>
                <li class="nav-item">
                    {{ link_to_route('contact.index', 'Contact Us', [], ['class' => 'nav-link']) }}
                </li>
                <li class="nav-item">
                    {{ link_to_route('about.book', 'The Book', [], ['class' => 'nav-link']) }}
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @auth
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" id="navbarDropdown" data-toggle="dropdown" role="button" aria-expanded="false">
                            Hi, {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropDown">
                            <li>{{ link_to_route('accounts.edit', 'Your Account Profile', ['id' => Auth::user()->id], ['class' => 'dropdown-item']) }}</li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   class="dropdown-item"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">{!! link_to_route('events.create', 'Post Event', [], ['class' => 'nav-link']) !!}</li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endauth
       
            </ul>

        </div>
    </div>
</nav>
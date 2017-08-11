    
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image-->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="https://s3.amazonaws.com/images.llmfairusa.com/imagenes/LogoEuropean.png" alt="" width="15%" height="auto">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar--> 
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links--> 
                        @if (Auth::guest())
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/aboutus') }}">About us</a></li>
                            <li><a href="{{ url('/llmfair') }}">LL.M. Fair</a></li>
                            <li><a href="{{ url('/lexpo') }}">Lexpo Switzerland</a></li>
                            <li><a href="{{ url('/llmgermany') }}">LL.M. Germany</a></li>
                            <li><a href="{{ url('/mlawschools') }}">Law Schools</a></li>
                            <li><a href="{{ url('/') }}">Law Firms</a></li>
                            <li><a href="{{ url('/') }}">Law Service Providers</a></li>
                            <li><a href="{{ url('/') }}">LL.M. Application</a></li>
                            <li><a href="{{ url('') }}">Gallery</a></li>
                            <li><a href="{{ url('/') }}">Contact us</a></li>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/aboutus') }}">About us</a></li>
                            <li><a href="{{ url('/llmfair') }}">LL.M. Fair</a></li>
                            <li><a href="{{ url('/lexpo') }}">Lexpo Switzerland</a></li>
                            <li><a href="{{ url('/llmgermany') }}">LL.M. Germany</a></li>
                            <li><a href="{{ url('/mlawschools') }}">Law Schools</a></li>
                            <li><a href="{{ url('/') }}">Law Firms</a></li>
                            <li><a href="{{ url('/') }}">Law Service Providers</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/') }}">LL.M. Application</a></li>
                                    <li><a href="{{ url('/channel/' . $channel->slug) }}">My Account</a></li>
                                    <li><a href="{{ url('/channel/' . $channel->slug . '/edit') }}">Account Settings</a></li>
                                    <li><a href="{{ url('/upload') }}">Upload documents</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>



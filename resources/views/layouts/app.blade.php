<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IWP') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{config('app.name','VIT-SHARE')}}</title>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
</head>
<body>

    <div class="wrapper style1">
        <div id="app">
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <!-- <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'IWP') }}
                        </a> -->
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar 
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!- Right Side Of Navbar 
                        <ul class="nav navbar-nav navbar-right" 
                            <!-Authentication Links 
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a> -->

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
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
                            @endguest
                        <!-- </ul> -->
                    </div>
                </div>
            </nav>
            <div class="container">
                @yield('content')
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </div>
    <div class="wrapper style5">
                    <section id="team" class="container">
                        <header class="major">
                            <h2>CREATORS</h2>
                            <span class="byline">Info about the creators and mentor.</span>
                        </header>
                        <div class="row">
                            <div class="3u">
                                <a href="#" class="image"><img src="/images/aaditya.jpg" alt="" height="100" width="100"></a>
                                <h3>Aaditya Vaidya<br>15BCB0032</h3>
                                <p>Back-End</p>
                            </div>
                            <div class="3u">
                                <a href="#" class="image"><img src="/images/dev.jpg" alt="" height="100" width="100"></a>
                                <h3>Dev Kumar<br>15BCB0060</h3>
                                <p>Front-End</p>
                            </div>
                            <div class="3u">
                                <a href="#" class="image"><img src="/images/yash.jpg" alt="" height="100" width="100"></a>
                                <h3>Yash Shah<br>15BCB0123</h3>
                                <p>DataBase</p>
                            </div>
                            <div class="3u">
                                <a href="#" class="image"><img src="/images/priyag.png" alt="" height="100" width="100"></a>
                                <h3>Prof. Priya G</h3>
                                <p>Mentor</p>
                            </div>
                        </div>
                    </section>
                </div>

        
            <div id="footer">
                <section class="container">
                    <header class="major">
                        <h2 font-color="Black">Connect with us</h2>
                        <span class="byline">Send your queries.</span>
                    </header>
                    <ul class="icon">
                        <li class="active"><a href="facebook.com" class="fa fa-facebook"><span>Facebook</span></a></li>
                        <li><a href="google+.com" class="fa fa-google-plus"><span>Google+</span></a></li>
                    </ul>
                    <hr>
                </section>		
    </div>
</body>
</html>

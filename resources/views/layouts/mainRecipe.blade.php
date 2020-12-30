<!DOCTYPE html>
<html lang="en">
<head>
    <title>FoodLifting
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--decorative-->
    <meta name="theme-color" content="#d44f68">
    <!--decorative END-->

    <!-- Vue.js -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/preload.css">


    <!-- css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    <script>
        function initMap() {
            var uluru = {lat: 54.723460, lng: 25.337933};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru,
                gestureHandling: 'cooperative'
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYrT3I2aBq4314tkfMn93EF3B3ph-cQ98&amp;callback=initMap"></script>


</head>
<body>
<div id="app">

<header class="b-header b-header__default">
    <div class="b-header_flex"><a class="b-header_logo" href="index.html"><img src="/assets/images/logo1pngPurple.png" alt="Logo"/></a>
        <nav class="b-header_nav">
            <ul>
                <li class="nav_block"><a href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav_block"><a href="{{ url('/recipes') }}">Recipes</a>
                </li>
                <li class="nav_block"><a href="{{ url('/contact') }}">Contact us</a>
                </li>
                
                @guest
                    <li class="nav_block">
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav_block">
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav_block">{{ Auth::user()->name }}
                        <ul>
                            <li>
                                <a href="{{ url('settings') }}">Settings</a>
                            </li>
                            <li>
                                <a href="{{ url('settings') }}">Settings2</a>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ ('Logout') }}</a>
                                <form id="logout-form" action="{{ url('logout') }}" method="POST" >
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>
                @endguest
            </ul>
        </nav>
        <div class="span" id="menu_toggle"><i class="fa fa-bars"></i></div>
        <div class="dropdown b-header_language" data-toggle="tooltip" data-placement="left" title="Change language">
            <button class="btn btn-light b-header_language-button" type="button" id="languageChanger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe fa-fw"></i></button>
            <div class="dropdown-menu dropdown-menu-right b-header_language-list" aria-labelledby="languageChanger"><a class="dropdown-item b-header_language-item active" href="#"><span>En</span></a><a class="dropdown-item b-header_language-item" href="#"><span>Ru</span></a><a class="dropdown-item b-header_language-item" href="#"><span>De</span></a></div>
        </div>
    </div>
</header>
<!-- HEADER END -->

<main>

    @yield('content')

</main>


    <footer-component></footer-component>


</div>



</body>
</html>



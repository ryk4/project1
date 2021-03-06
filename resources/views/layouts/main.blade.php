


<!--header-->
<!--header END--><!DOCTYPE html>
<html lang="en">
<head>
    <title>Home page
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--decorative-->
    <meta name="theme-color" content="#d44f68">
    <!--decorative END-->

    <!-- Vue.js -->

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/preload.css">


    <!--Base js =================================================================IDK IF NEEDED =================================================================


        <script src="../../../public/assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    -->
    <!--App js-->


</head>
<body>
<div id="app">

<!-- Button trigger modal -->


        @isset($page)
            @if($page == 'home')
                <header class="b-header b-header__absolute-top b-header__white">
                    <div class="b-header_flex"><a class="b-header_logo" href="index.html"><img src="/assets/images/logo1png.png" alt="Logo"/></a>
            @else
                <header class="b-header b-header__default">
                    <div class="b-header_flex"><a class="b-header_logo" href="index.html"><img src="/assets/images/logo1pngPurple.png" alt="Logo"/></a>
            @endif
        @endisset

        <nav class="b-header_nav">
            
        



            <ul>
                
                <li class="nav_block"><a href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav_block"><a href="{{ url('/recipes') }}">Recipes</a>
                </li>
                
                @guest 
                @else                
                    @if (Auth::user()->user_level<=1)
                    
                    <li class="nav_block">  
                        <a href='{{url('/recipe/manage')}}'>Manage recipes</a>
                    </li>
                    @endif
                @endguest
                
                <li class="nav_block">
                    <a href="{{ url('/contact') }}">Contact us</a>
                </li>
                @guest
                
                <li class="nav_block">
                    <a style="cursor: pointer" data-toggle="modal" data-target="#loginModal">{{ __('Login') }}</a>
                </li>
                    
                @if (Route::has('register'))
                    <li class="nav_block">
                        <a style="cursor: pointer"data-toggle="modal" data-target="#registerModal">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    
                    <!--<li class="nav_block">
                        <form method="post" action="{{ action('App\Http\Controllers\ApiTokenController@generateToken') }}" accept-charset="UTF-8">
                            <button type="submit" class="btn btn-primary">
                                {{ __('generateToken') }}
                            </button>
                        </form>
                    </li>-->
                    
                    <li class="nav_block">{{ Auth::user()->name }}
                        <ul>
                            <li>
                                <a href="{{ url('/admin/dashboard') }}">Admin area</a>
                            </li>
                            <li>
                                <a href="{{ url('settings') }}">Settings</a>
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
            <div class="dropdown-menu dropdown-menu-right b-header_language-list" aria-labelledby="languageChanger">
                <a class="dropdown-item b-header_language-item active" href="#"><span>En</span></a>
                <a class="dropdown-item b-header_language-item" href="#"><span>Ru</span></a>
                <a class="dropdown-item b-header_language-item" href="#"><span>De</span></a>
            </div>
        </div>
    </div>
</header>


<main>
    @yield('content')
</main>


<footer class="b-footer">
    <div class="container d-flex flex-wrap">
        <nav class="b-footer_navigation">
            <ul>
                <li><a href="{{ url('/home') }}">Home</a>
                </li>
                <li><a href="objects_category.html">Category</a>
                </li>
                <li><a>Elements</a>
                </li>
                <li><a href="blog.html">Blog</a>
                </li>
                <li><a href="pages_about.html">About</a>
                </li>
                <li><a href="pages_contacts.html">Contacts</a>
                </li>

            </ul>
        </nav>
        <div class="b-footer_social-list">
            <ul>
                <li><a href=""><i class="fab fa-facebook" title="Facebook"></i></a></li>
                <li><a href=""><i class="fab fa-flickr" title="Flickr"></i></a></li>
                <li><a href=""><i class="fab fa-twitter" title="Twitter"></i></a></li>
                <li><a href=""><i class="fab fa-pinterest" title="Pinterest"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row"></div>
    </div>
</footer>
<!--Base style-->
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



    </div>
    @include('partials.login')
    @include('partials.register')

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>



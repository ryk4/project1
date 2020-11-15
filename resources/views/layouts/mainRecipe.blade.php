
<!--header-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home page
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--decorative-->
    <meta name="theme-color" content="#d44f68">
    <!--decorative END-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/preload.css">
</head>
<body>
<header class="b-header b-header__default">
    <div class="b-header_flex"><a class="b-header_logo" href="index.html"><img src="/assets/images/logo.png" alt="Logo"/></a>
        <nav class="b-header_nav">
            <ul>
                <li class="nav_block"><a href="/">Home</a>
                </li>
                <li class="nav_block"><a href="objects_category.html">Category<i class="fas fa-angle-down"></i></a>
                    <ul>
                        <li class="left"><a>Categories design<i class="fas fa-angle-right"></i></a>
                            <ul>
                                <li><a href="objects_category_with_filter.html">With filter</a></li>
                            </ul>
                        </li>
                        <li><a href="object_default.html">Reciept page v.1</a></li>
                        <li><a href="object_nohero.html">Reciept page v.2</a></li>
                        <li><a href="object_default_with_sidebar.html">Reciept page v.3</a></li>
                    </ul>
                </li>
                <li class="nav_block"><a>Elements<i class="fas fa-angle-down"></i></a>
                    <ul>
                        <li><a href="pages_cards.html">Cards</a></li>
                        <li><a href="pages_delems.html">Design elements</a></li>
                        <li><a href="pages_forms.html">Forms</a></li>
                    </ul>
                </li>
                <li class="nav_block"><a href="blog.html">Blog<i class="fas fa-angle-down"></i></a>
                    <ul>
                        <li><a href="post.html">Blog page v.1</a></li>
                    </ul>
                </li>
                <li class="nav_block"><a href="pages_about.html">About</a>
                </li>
                <li class="nav_block"><a href="pages_contacts.html">Contacts</a>
                </li>
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!--Base js-->
<script src="/assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--App js-->
<script src="/assets/js/app.js"></script>
<!-- Enable tooltips-->
<script>$(function () { $('[data-toggle="tooltip"]').tooltip() })</script>
</body>
</html>



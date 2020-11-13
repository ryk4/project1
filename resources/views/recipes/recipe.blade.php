
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
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/preload.css">
</head>
<body>
<header class="b-header b-header__absolute-top b-header__white">
    <div class="b-header_flex"><a class="b-header_logo" href="index.html"><img src="/assets/images/logo__white.png" alt="Logo"/></a>
        <nav class="b-header_nav">
            <ul>
                <li class="nav_block"><a href="index.html">Home</a>
                </li>
                <li class="nav_block"><a href="objects_category.html">Category<i class="fas fa-angle-down"></i></a>
                    <ul>
                        <li class="left"><a>Categories design<i class="fas fa-angle-right"></i></a>
                            <ul>
                                <li><a href="objects_category_with_filter.html">With filter</a></li>
                            </ul>
                        </li>
                        <li><a href="../../../public/object_default.html">Reciept page v.1</a></li>
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
<main>
    <!-- heroscreen block-->
    <div class="b-hero b-hero__light" style="background-image:url(/assets/images/background_home.jpg)">
        <div class="container pl-sm-5 py-sm-5 my-sm-5">
            <h3 class="display-5 ml-sm-5 text-italic"> <i>It’s AWESOME!</i></h3>
            <h2 class="display-4"> <strong>More then 1000 of best recieps</strong></h2>
        </div>
        <div class="container py-sm-4">
            <h5 class="mb-4 text-center"> <i>Recent categories</i></h5>
            <div class="row justify-content-center"><a class="g-badge" style="background-color:#d44f68" href="objects_category.html">Fish</a><a class="g-badge" style="background-color:#e8a765" href="objects_category.html">Fruits</a><a class="g-badge" style="background-color:#7d6dad" href="objects_category.html">Spice</a><a class="g-badge" style="background-color:#d24a43" href="objects_category.html">Meat</a>
            </div>
        </div>
    </div>
    <!-- heroscreen block END-->
    <!-- subscribe block-->
    <section class="b-subscribe">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4 offset-lg-1">
                    <h5 class="b-subscribe_text text-lg-right text-center mb-4 mb-lg-0"><i>We have something interesting for you every week</i></h5>
                </div>
                <div class="col-12 col-lg-6">
                    <form class="b-subscribe_input-group input-group">
                        <input class="form-control" type="text" placeholder="Tell us your e-mail"><span class="input-group-append">
                  <button class="btn btn-primary" type="button">Subscribe</button></span>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe block END-->
    <!--popular section-->
    <section class="container py-3 mt-5">
        <h2 class="h1">Popular</h2>
        <p class="text-muted">Redaction chosen category</p>
        <div class="row">
            <div class="b-card col-12 col-xl-6">
                <div class="b-card_inner">
                    <div class="b-card_image" style="background-image:url(/assets/images/reciept_1_card.jpg)"><a class="b-card_image-link" href="../../../public/object_default.html"></a>
                        <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#d44f68">Fish</span><span class="g-views"><i class="fa fa-eye"></i>12</span><span class="g-likes"><i class="fa fa-heart"></i>5</span></div>
                        <div class="b-card_image-info-bottom">
                            <h3 class="b-card_title"><a href="../../../public/object_default.html">Amazing fish steak</a></h3>
                            <div class="g-autor"><a href="index.html">Rambo</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-card col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_image" style="background-image:url(/public/assets/images/reciept_2_card.jpg)"><a class="b-card_image-link" href="object_nohero.html"></a>
                        <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#7d6dad">Spice</span><span class="g-views"><i class="fa fa-eye"></i>0</span><span class="g-likes"><i class="fa fa-heart"></i>0</span></div>
                        <div class="b-card_image-info-bottom">
                            <h3 class="b-card_title"><a href="object_nohero.html">How to cook jalapeno sauce</a></h3>
                            <div class="g-autor"><a href="index.html">John Doe</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-card col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_image" style="background-image:url(/assets/images/reciept_3_card.jpg)"><a class="b-card_image-link" href="object_default_with_sidebar.html"></a>
                        <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#d24a43">Meat</span><span class="g-views"><i class="fa fa-eye"></i>6</span><span class="g-likes"><i class="fa fa-heart"></i>30</span></div>
                        <div class="b-card_image-info-bottom">
                            <h3 class="b-card_title"><a href="object_default_with_sidebar.html">Fineness of cooking medium rare steak</a></h3>
                            <div class="g-autor"><a href="index.html">Rambo</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix text-right"><a class="link_animated" href="objects_category.html">Watch more<i class="fa fa-angle-right"></i></a></div>
    </section>
    <!--popular section END-->
    <!--newest items section-->
    <section class="container py-3">
        <h2 class="h1">New items</h2>
        <p class="text-muted">Recently added recipes</p>
        <div class="row">
            <div class="b-card col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_image" style="background-image:url(/assets/images/reciept_1_card.jpg)"><a class="b-card_image-link" href="../../../public/object_default.html"></a>
                        <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#d44f68">Fish</span><span class="g-views"><i class="fa fa-eye"></i>12</span><span class="g-likes"><i class="fa fa-heart"></i>5</span></div>
                        <div class="b-card_image-info-bottom"></div>
                    </div>
                    <div class="b-card_description">
                        <h3 class="b-card_title"><a href="../../../public/object_default.html">Amazing fish steak</a></h3>
                        <div class="b-card_text">
                            <p>Pure some sugar on me.</p>
                        </div>
                        <div class="g-autor"><a href="index.html">Rambo</a></div>
                    </div>
                </div>
            </div>
            <div class="b-card col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_image" style="background-image:url(/assets/images/reciept_2_card.jpg)"><a class="b-card_image-link" href="object_nohero.html"></a>
                        <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#7d6dad">Spice</span><span class="g-views"><i class="fa fa-eye"></i>0</span><span class="g-likes"><i class="fa fa-heart"></i>0</span></div>
                        <div class="b-card_image-info-bottom"></div>
                    </div>
                    <div class="b-card_description">
                        <h3 class="b-card_title"><a href="object_nohero.html">How to cook jalapeno sauce</a></h3>
                        <div class="b-card_text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>
                        <div class="g-autor"><a href="index.html">John Doe</a></div>
                    </div>
                </div>
            </div>
            <div class="b-card col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_image" style="background-image:url(/public/assets/images/reciept_3_card.jpg)"><a class="b-card_image-link" href="object_default_with_sidebar.html"></a>
                        <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#d24a43">Meat</span><span class="g-views"><i class="fa fa-eye"></i>6</span><span class="g-likes"><i class="fa fa-heart"></i>30</span></div>
                        <div class="b-card_image-info-bottom"></div>
                    </div>
                    <div class="b-card_description">
                        <h3 class="b-card_title"><a href="object_default_with_sidebar.html">Fineness of cooking medium rare steak</a></h3>
                        <div class="b-card_text">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="g-autor"><a href="index.html">Rambo</a></div>
                    </div>
                </div>
            </div>
            <div class="b-card col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_image" style="background-image:url(/assets/images/reciept_4_card.jpg)"><a class="b-card_image-link" href="../../../public/object_default.html"></a>
                        <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#e8a765">Fruits</span><span class="g-views"><i class="fa fa-eye"></i>6</span><span class="g-likes"><i class="fa fa-heart"></i>30</span></div>
                        <div class="b-card_image-info-bottom"></div>
                    </div>
                    <div class="b-card_description">
                        <h3 class="b-card_title"><a href="../../../public/object_default.html">Healthy food in the morning</a></h3>
                        <div class="b-card_text">
                            <p></p>
                        </div>
                        <div class="g-autor"><a href="index.html">John Doe</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix text-right"><a class="link_animated" href="objects_category.html">Watch more<i class="fa fa-angle-right"></i></a></div>
    </section>
    <!--newest items section END-->
    <!--newest items section-->
    <section class="container py-3">
        <h2 class="h1">Posts</h2>
        <p class="text-muted">New, posts, blogs of users</p>
        <div class="row">
            <div class="b-card b-card__deferred col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_description">
                        <div class="b-card_description-info-top"><span class="g-badge" style="background-color:#e8a765">Fruits</span><span class="g-views"><i class="fa fa-eye"></i>9</span><span class="g-likes"><i class="fa fa-heart"></i>4K</span></div><span><small>21.07.2017</small></span>
                        <h3 class="b-card_title"><a href="post.html">Health and food</a></h3>
                        <div class="b-card_text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        </div>
                        <div class="g-autor"><a href="index.html">Rambo</a></div>
                    </div>
                    <div class="b-card_additional"><a class="col b-card_action-comment"><i class="fa fa-comments-o"></i>comment</a><a class="col b-card_action-bookmark"><i class="fa fa-bookmark-o"></i>bookmark</a></div>
                </div>
            </div>
            <div class="b-card b-card__deferred col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_description">
                        <div class="b-card_description-info-top"><span class="g-badge" style="background-color:#e8a765">Fruits</span><span class="g-views"><i class="fa fa-eye"></i>9</span><span class="g-likes"><i class="fa fa-heart"></i>4K</span></div><span><small>21.07.2017</small></span>
                        <h3 class="b-card_title"><a href="post.html">Fish from the north</a></h3>
                        <div class="b-card_text">
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
                        </div>
                        <div class="g-autor"><a href="index.html">Rambo</a></div>
                    </div>
                    <div class="b-card_additional"><a class="col b-card_action-comment"><i class="fa fa-comments-o"></i>comment</a><a class="col b-card_action-bookmark"><i class="fa fa-bookmark-o"></i>bookmark</a></div>
                </div>
            </div>
            <div class="b-card b-card__deferred col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_description">
                        <div class="b-card_description-info-top"><span class="g-badge" style="background-color:#e8a765">Fruits</span><span class="g-views"><i class="fa fa-eye"></i>9</span><span class="g-likes"><i class="fa fa-heart"></i>4K</span></div><span><small>1.07.2017</small></span>
                        <h3 class="b-card_title"><a href="post.html">Why genetically modified potatoes are not dangerous?</a></h3>
                        <div class="b-card_text">
                            <p></p>
                        </div>
                        <div class="g-autor"><a href="index.html">Taras Bulba</a></div>
                    </div>
                    <div class="b-card_additional"><a class="col b-card_action-comment"><i class="fa fa-comments-o"></i>comment</a><a class="col b-card_action-bookmark"><i class="fa fa-bookmark-o"></i>bookmark</a></div>
                </div>
            </div>
            <div class="b-card b-card__deferred col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_description">
                        <div class="b-card_description-info-top"><span class="g-badge" style="background-color:#e8a765">Fruits</span><span class="g-views"><i class="fa fa-eye"></i>9</span><span class="g-likes"><i class="fa fa-heart"></i>4K</span></div><span><small>11.07.2017</small></span>
                        <h3 class="b-card_title"><a href="post.html">Where can you try gazpacho?</a></h3>
                        <div class="b-card_text">
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
                        </div>
                        <div class="g-autor"><a href="index.html">Taras Bulba</a></div>
                    </div>
                    <div class="b-card_additional"><a class="col b-card_action-comment"><i class="fa fa-comments-o"></i>comment</a><a class="col b-card_action-bookmark"><i class="fa fa-bookmark-o"></i>bookmark</a></div>
                </div>
            </div>
        </div>
        <div class="clearfix text-right"><a class="link_animated" href="blog.html">Watch more<i class="fa fa-angle-right"></i></a></div>
    </section>
    <!--newest items section END-->
</main>
<footer class="b-footer">
    <div class="container d-flex flex-wrap">
        <nav class="b-footer_navigation">
            <ul>
                <li><a href="index.html">Home</a>
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
<script src="../../../public/assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--App js-->
<script src="../../../public/assets/js/app.js"></script>
<!-- Enable tooltips-->
<script>$(function () { $('[data-toggle="tooltip"]').tooltip() })</script>
</body>
</html>

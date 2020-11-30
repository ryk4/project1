@extends('layouts.main')




@section('content')
    <!-- heroscreen block-->
    <div class="b-hero b-hero__light" style="background-image:url(/assets/images/background_home.jpg)">
        <div class="container pl-sm-5 py-sm-5 my-sm-5">
            <h3 class="display-5 ml-sm-5 text-italic"> <i>"What you eat is what you are."</i></h3>
            <h2 class="display-4"> <strong>Find your favourite recipes</strong></h2>
        </div>
        <div class="container py-sm-4">
            <h5 class="mb-4 text-center"> <i>Recent categories</i></h5>
            <div class="row justify-content-center"><a class="g-badge" style="background-color:#d44f68" href="objects_category.html">Fish</a><a class="g-badge" style="background-color:#e8a765" href="objects_category.html">Fruits</a><a class="g-badge" style="background-color:#7d6dad" href="objects_category.html">Spice</a><a class="g-badge" style="background-color:#d24a43" href="objects_category.html">Meat</a>
            </div>
        </div>
    </div>
    <!-- heroscreen block END-->

    <!-- subscribe block-->
    <!--<section class="b-subscribe">
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
    </section>-->
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
                    <div class="b-card_image" style="background-image:url(/assets/images/reciept_2_card.jpg)"><a class="b-card_image-link" href="object_nohero.html"></a>
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
        <div class="clearfix text-right"><a class="link_animated" href="objects_category_with_filter.html">Watch more<i class="fa fa-angle-right"></i></a></div>
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
            @isset($recipes)
                @foreach ($recipes as $recipe)
                    <div class="b-card col-12 col-md-6 col-xl-3">
                        <div class="b-card_inner">
                            <div class="b-card_image" style="background-image:url(/images/recipes/{{$recipe -> id}}.jpg)"><a class="b-card_image-link" href="/recipe/{{$recipe -> id}}"></a>
                                @php
                                    $tags= json_decode(\App\Http\Controllers\RecipeController::getRecipeTags($recipe->id)->content());

                                @endphp
                                <div class="b-card_image-info-top">

                                        @if(!empty($tags))
                                             <span class="g-badge" style="background-color:#{{$tags[0]->representative_color}}">{{$tags[0]->name}}</span>
                                                 @php
                                                      unset($tags[0])
                                                 @endphp
                                        @endif

                                    <span class="g-views"><i class="fa fa-eye"></i>{{$recipe -> viewCounter}}</span>
                                    <span class="g-likes"><i class="fa fa-heart"></i>{{$recipe -> favouriteCounter}}</span></div>
                                <div class="b-card_image-info-bottom"></div>
                            </div>
                            <div class="b-card_description">
                                <h3 class="b-card_title"><a href="/recipe/{{$recipe -> id}}">{{$recipe->title}}</a></h3>
                                <div class="b-card_text">
                                    <p class="text-muted">
                                        <span><i class="fas fa-clock"></i> {{$recipe->cookTime}} mins, </span>
                                        <span><i class="fas fa-heartbeat"></i> {{$recipe->calories}} calories</span></p>
                                </div>
                                <div class="b-card_text" style="padding-bottom: 10px;">
                                    @if(!empty($tags))
                                        @foreach ($tags as $tag)

                                            <div class="homepageTags">{{$tag->name}}</div>

                                        @endforeach
                                    @endif
                                </div>
                                <div class="g-autor"><a href="/recipe/{{$recipe -> id}}">Read more</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>

        <div class="clearfix text-right"><a class="link_animated" href="objects_category_with_filter.html">Watch more<i class="fa fa-angle-right"></i></a></div>
    </section>
    <!--newest items section END-->
    <!--newest items section-->
    <!--
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
    -->
    <!--newest items section END-->
@endsection

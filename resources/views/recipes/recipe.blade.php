@extends('layouts.mainRecipe')

@php
    $tags= json_decode(\App\Http\Controllers\RecipeController::getRecipeTags($recipe[0]->id)->content());
@endphp

@section('content')
<div class="container py-3">
<div class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item"><a href="{{ route('recipes') }}">Recipes</a></li>
<li class="breadcrumb-item"><a href="{{ route('recipes') }}?category={{$tags[0]->name}}">{{$tags[0]->name}}</a></li>
<li class="breadcrumb-item active">{{$recipe[0]->title}}</li>
</div>
</div>
<article class="container g-block__three-rounds bg-white mb-3 p-md-5 p-3">
<div class="row">
<div class="col-12 col-md-6" "><img class="img-fluid mb-3" src="/images/recipes/{{$recipe[0]->id}}.jpg" alt="{{$recipe[0]->title}}"></div>
<div class="col-12 col-md-6">
<h1>{{$recipe[0]->title}}</h1>
<hr>
<h4>Short info</h4>
<p class="text-muted">
<span><i class="fas fa-clock"></i> {{$recipe[0]->cookTime}} mins, </span>
<span><i class="fas fa-heartbeat"></i> {{$recipe[0]->calories}} calories</span></p>
<p class="text-muted">
<span>{{$recipe[0]->protein}}g Protein, {{$recipe[0]->carbohydrates}}g Carbohydrates, {{$recipe[0]->fat}}g Fat</span>
<p><strong>Autor : <a href="index.html">Rytis Klimavicius</a></strong></p>
<hr><a class="btn btn-primary mb-3" href="#"><i class="fas fa-bookmark mr-2"></i> bookmark</a>
</div>
</div>


<div class="row">
<div class="col-12 col-lg-6 col-xl-8">

{!!  $recipe[0]->steps !!}


<!-- Ingredients START-->
<div class="col-12 col-lg-6 col-xl-4">
<div class="b-list b-list__bordered b-list__white">
<h4>Ingridients</h4>

@php
$strIngredients = $recipe[0] -> ingredients;
$counter=0;

while($strIngredients != ""){
    $individual = strtok($strIngredients, ";"); //extract e.g 100g-Chicken
    $strIngredients = str_replace($individual,"",$strIngredients);//remove it from string
    $strIngredients = substr_replace($strIngredients,'',0,1);

    echo('
    <div class="b-list_item custom-control custom-checkbox">
    <input class="custom-control-input" type="checkbox" id="listItem'.$counter.'">
    <label class="b-list_item-title custom-control-label" for="listItem'.$counter.'"><span>'.strtok($individual, "-").'</span></label>
    <div class="b-list_item-value"><span>'.substr($individual, strpos($individual, "-") + 1).'</span></div>
     </div>
    ');

    $counter++;

}

                        @endphp

                    </div>
                    <div class="g-tag-list my-3">
                        @php

                            foreach($tags as $tag){
                                echo '<a class="g-tag-list_item" href="#">'.$tag->name.'</a>';
                            }
                        @endphp


                    </div>
                </div>
            </div>
            <!-- Ingredients END-->

        </div>
    </article>
    <!--simple items section-->
    <section class="container py-3">
        <h2 class="h1">Simple</h2>
        <div class="row">
            <div class="b-card col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_image" style="background-image:url(assets/images/reciept_1_card.jpg)"><a class="b-card_image-link" href="object_default.html"></a>
                        <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#d44f68">Fish</span><span class="g-views"><i class="fa fa-eye"></i>12</span><span class="g-likes"><i class="fa fa-heart"></i>5</span></div>
                        <div class="b-card_image-info-bottom"></div>
                    </div>
                    <div class="b-card_description">
                        <h3 class="b-card_title"><a href="object_default.html">Amazing fish steak</a></h3>
                        <div class="b-card_text">
                            <p>Pure some sugar on me.</p>
                        </div>
                        <div class="g-autor"><a href="index.html">Rambo</a></div>
                    </div>
                </div>
            </div>
            <div class="b-card col-12 col-md-6 col-xl-3">
                <div class="b-card_inner">
                    <div class="b-card_image" style="background-image:url(assets/images/reciept_2_card.jpg)"><a class="b-card_image-link" href="object_nohero.html"></a>
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
                    <div class="b-card_image" style="background-image:url(assets/images/reciept_3_card.jpg)"><a class="b-card_image-link" href="object_default_with_sidebar.html"></a>
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
                    <div class="b-card_image" style="background-image:url(assets/images/reciept_4_card.jpg)"><a class="b-card_image-link" href="object_default.html"></a>
                        <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#e8a765">Fruits</span><span class="g-views"><i class="fa fa-eye"></i>6</span><span class="g-likes"><i class="fa fa-heart"></i>30</span></div>
                        <div class="b-card_image-info-bottom"></div>
                    </div>
                    <div class="b-card_description">
                        <h3 class="b-card_title"><a href="object_default.html">Healthy food in the morning</a></h3>
                        <div class="b-card_text">
                            <p></p>
                        </div>
                        <div class="g-autor"><a href="index.html">John Doe</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--simple items section END-->
    @endsection



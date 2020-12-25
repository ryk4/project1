@extends('layouts.mainRecipe')

@php
    $tags= json_decode(\App\Http\Controllers\RecipeController::getRecipeTags($recipe->id)->content());
@endphp

@section('content')


    <div class="container py-3">
        <div class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('recipes') }}">Recipes</a></li>
            <li class="breadcrumb-item"><a href="{{ route('recipes') }}?category={{$tags[0]->name}}">{{$tags[0]->name}}</a></li>
            <li class="breadcrumb-item active">{{$recipe->title}}</li>
        </div>

    </div>
    <article class="container g-block__three-rounds bg-white mb-3 p-md-5 p-3">


        <!-- 1. Description Component START-->
        
        <div class="row">
            <div class="col-12 col-md-6" ><img class="img-fluid mb-3" src="/images/recipes/{{$recipe->id}}.jpg" alt="{{$recipe->title}}"></div>
            <div class="col-12 col-md-6">
                <h1>{{$recipe->title}}</h1>
                <hr>
                <h4>Short info</h4>
                <p class="text-muted">
                    <span><i class="fas fa-clock"></i> {{$recipe->cookTime}} mins, </span>
                    <span><i class="fas fa-heartbeat"></i> {{$recipe->calories}} calories</span></p>
                <p class="text-muted">
                    <span>{{$recipe->protein}}g Protein, {{$recipe->carbohydrates}}g Carbohydrates, {{$recipe->fat}}g Fat</span>
                <p><strong>Autor : <a href="index.html">Rytis Klimavicius</a></strong></p>
                <hr><a class="btn btn-primary mb-3" href="#"><i class="fas fa-bookmark mr-2"></i> bookmark</a>
            </div>
        </div>

        <!-- 1. Description Component END-->


        <div class="row">


            <div class="col-12 col-lg-6 col-xl-8">

                <h1>==Recipe Test==</h1>


            {!!  $recipe->steps !!}


            <!-- Ingredients START-->
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="b-list b-list__bordered b-list__white">
                        <h4>Ingridients</h4>

                        @php
                            $strIngredients = $recipe -> ingredients;
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

                <!-- Ingredients END-->

            </div>

        </div>



    </article>






@endsection



@extends('layouts.mainRecipe')


@section('content')
    <div class="container py-3">
        <div class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Recieps</a></li>
            <li class="breadcrumb-item"><a href="#">Spice</a></li>
            <li class="breadcrumb-item active">{{$recipe[0]->title}}</li>
        </div>
    </div>
    <article class="container g-block__three-rounds bg-white mb-3 p-md-5 p-3">
        <div class="row">
            <div class="col-12 col-md-6"><img class="img-fluid mb-3" src="/assets/images/reciept_2_card.jpg" alt="How to cook jalapeno sauce"></div>
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
                <h2>How to cook</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                <div class="d-flex align-items-center">
                    <h6 class="col" data-toggle="collapse" href="#stage1" role="button" aria-expanded="true" aria-controls="stage1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="listStage0">
                            <label class="b-list_item-title custom-control-label" for="listStage0"><strong>Stage 1: Get a fish</strong></label>
                        </div>
                    </h6>
                </div>
                <div class="collapse show" id="stage1">
                    <p>If it really difficult to fish, you can steal it.</p>
                </div>
                <div class="d-flex align-items-center">
                    <h6 class="col" data-toggle="collapse" href="#stage2" role="button" aria-expanded="true" aria-controls="stage2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="listStage2">
                            <label class="b-list_item-title custom-control-label" for="listStage2"><strong>Stage 2: Clean it</strong></label>
                        </div>
                    </h6>
                </div>
                <div class="collapse show" id="stage2">
                    <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                </div>
                <div class="d-flex align-items-center">
                    <h6 class="col" data-toggle="collapse" href="#stage3" role="button" aria-expanded="true" aria-controls="stage3">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="listStage3">
                            <label class="b-list_item-title custom-control-label" for="listStage3"><strong>Stage 3: Cook it</strong></label>
                        </div>
                    </h6>
                </div>
                <div class="collapse show" id="stage3">
                    <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                </div>
                <div class="d-flex align-items-center">
                    <h6 class="col" data-toggle="collapse" href="#stage4" role="button" aria-expanded="true" aria-controls="stage4">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="listStage4">
                            <label class="b-list_item-title custom-control-label" for="listStage4"><strong>Stage 4: Finish</strong></label>
                        </div>
                    </h6>
                </div>
                <div class="collapse show" id="stage4">
                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 flex-last">
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
                    $strTags = $recipe[0] -> tags;
                    $counter=0;
                    while($strTags != ""){
                        $tag = strtok($strTags, ";"); //extract e.g 100g-Chicken
                        $strTags = str_replace($tag,"",$strTags);//remove it from string
                        $strTags = substr_replace($strTags,'',0,1);
                        echo ' <a class="g-tag-list_item" href="#">'.$tag.'</a>';
                        $counter++;

                    }
                    @endphp

                </div>
            </div>
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

</main>


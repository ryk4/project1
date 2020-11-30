@extends('layouts.mainRecipe')


@section('content')

    <div class="container pt-3">
        <div class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Recipes</li>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <aside class="col-12 col-lg-3">
                <div class="py-3 sticky-top">
                    <h3>Filter</h3>
                    <div class="b-widget b-widget__search">
                        <form class="search-form" role="search" method="get">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for..."/><span class="input-group-append">
                      <button class="btn btn-primary px-3" type="button"><span>Go</span></button></span>
                            </div>
                        </form>
                    </div>
                    <h4>Categories</h4>
                    <div class="list-group"><a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#">Fish<span class="badge badge-pill text-white" style="background-color:#d44f68">19</span></a><a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#">Fruits<span class="badge badge-pill text-white" style="background-color:#e8a765">2</span></a><a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#">Spice<span class="badge badge-pill text-white" style="background-color:#7d6dad">1</span></a><a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#">Meat<span class="badge badge-pill text-white" style="background-color:#d24a43">6</span></a>
                    </div>
                </div>
            </aside>
            <main class="col-12 col-lg-9">
                <div class="d-flex align-items-center"><span class="ml-auto mr-3">Sort by:</span>
                    <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                        <label class="btn btn-light active">
                            <input type="radio" name="sortBy" id="option1" autocomplete="off" checked>A-Z
                        </label>
                        <label class="btn btn-light">
                            <input type="radio" name="sortBy" id="option2" autocomplete="off"><i class="fas fa-heart"></i>
                        </label>
                        <label class="btn btn-light">
                            <input type="radio" name="sortBy" id="option3" autocomplete="off"><i class="fas fa-eye"></i>
                        </label>
                    </div>
                </div>

                <!-- Recipes START -->
                @isset($recipes)
                <div class="row"*>
                        @foreach ($recipes as $recipe)
                            <div class="b-card col-12 col-lg-6 col-xl-4">
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
                                        <div class="b-card_image-info-bottom">
                                            <h3 class="b-card_title"><a href="/recipe/{{$recipe -> id}}">{{$recipe->title}}</a></h3>

                                            <div class="b-card_text">
                                                <p>
                                                    <span><i class="fas fa-clock"></i> {{$recipe->cookTime}} mins, </span>
                                                    <span><i class="fas fa-heartbeat"></i> {{$recipe->calories}} calories</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                </div>
                {{ $recipes->links() }}

            @endisset

            <!-- Recipes END -->

            </main>

        </div>
    </div>

@endsection



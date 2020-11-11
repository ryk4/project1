@extends('layouts.app')





@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card dashboard-card">
                <div class="card-header">{{ __('All Recipes') }}</div>


                <div class="col-md-12 d-inline ingredients-main">
                    <div class="row">
                        @isset($recipes)
                            @foreach ($recipes as $recipe)

                                    <div  class=" col-md-4 ingredient-top">
                                        <a  hred="#">


                                                <div class=" ingredient">
                                                    <div class="recipe-img col-sm-12 col-md-12 col-lg-12">
                                                        <img src="{{ asset('storage/images/recipes/image'. $recipe->id .'.jpg')}}" class="img-responsive recipe-img" >

                                                    </div>
                                                    <div class="col-md-12">
                                                        <br><h5>{{$recipe->title}}</h5>
                                                        <div class="recipe-text">{{$recipe->ingredients}}</div>
                                                        <div class="recipe-text">{{$recipe->prepTime}}mins (prep) + {{$recipe->cookTime}}mins (cook)</div>
                                                        <div class="recipe-text">{{$recipe->calories}}
                                                            Calories</div>
                                                        <div class="recipe-text"> Hide=P,C,F:{{$recipe->protein}},{{$recipe->carbohydrates}},{{$recipe->fat}}</div>
                                                        <div class="recipe-text">tags: {{$recipe->tags}}</div>
                                                    </div>

                                                </div>
                                            <div type="button" class="button" data-toggle="modal" data-target="#myModal">Edit</div>


                                            !-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                View details
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="recipe-text">
                                                                Ingredients: {{$recipe->ingredients}}
                                                            </div>
                                                            <div class="recipe-text">
                                                                Steps to make: {{$recipe->steps}}
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </a>

                                    </div>

                                <
                            @endforeach
                        @endisset
                    </div>

<!-- Modal -->





              <!--  <p>===START===</p>
                    <div id="app1">
                        <button class="button" @click="showModal = true">
                            Show Modal
                        </button>
                        <transition name="fade" appear>
                            <div class="modal-overlay" v-if="showModal" @click="showModal = false"></div>
                        </transition>
                        <transition name="slide" appear>
                            <div class="modal" v-if="showModal">
                                <h1>Lorem Ipsum</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem provident explicabo accusamus laudantium voluptatum nobis sed nesciunt neque possimus molestiae?</p>
                                <button class="button" @click="showModal = false">
                                    Close Modal
                                </button>
                            </div>
                        </transition>
                    </div>
                <p>===END===</p>-->



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                @isset($token)
                    <p>new token: {{$token}}</p>

                @endisset

                <form method="post" action="{{ action('App\Http\Controllers\ApiTokenController@generateToken') }}" accept-charset="UTF-8">
                    <button type="submit" class="btn btn-primary">
                        {{ __('generateToken') }}
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection

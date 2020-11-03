@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="col-md-12 d-inline">
                    <div class="row">
                        @isset($recipes)
                            @foreach ($recipes as $recipe)
                                <div class="col-md-4">
                                    <h5>{{$recipe->title}}</h5>
                                    <p>{{$recipe->ingredients}}</p>
                                    <br>
                                    <p>{{$recipe->prepTime}} + {{$recipe->cookTime}}</p>
                                    <p>P,C,F:{{$recipe->protein}},{{$recipe->carbohydrates}},{{$recipe->fat}}</p>
                                    <p>tags: {{$recipe->tags}}</p>
                                </div>
                            @endforeach
                        @endisset
                    </div>

                </div>




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

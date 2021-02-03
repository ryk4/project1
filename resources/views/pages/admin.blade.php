@extends('layouts.main',['page' => 'adminArea'])


@section('content')

<div class="container">
    <div class="row m-4">
        <div class="col-6 offset-md-3 text-center mb-4">
            <h3 class="">Admin Dashboard</h3>
            <p>User : {{$username}}</p>

            <p>Auth token is: 
            @if(isset($token))
                {{$token}}
            @else
                NOT SET
            @endif
            </p>
            
            <form method="post" action="{{ action('App\Http\Controllers\ApiTokenController@generateToken') }}" >
                <button type="submit" class="btn btn-primary">
                    {{ __('generateToken') }}
                </button>
            </form>
            

        </div>
    </div>
</div>


@endsection

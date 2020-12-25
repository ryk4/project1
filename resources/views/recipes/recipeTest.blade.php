@extends('layouts.mainRecipe')

@section('content')

<div class="container py-3">
    <div class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Recipes</a></li>
        <li class="breadcrumb-item"><a href="#">tag</a></li>
        <li class="breadcrumb-item active">title Recipe</li>
    </div>

</div>

<recipe-component></recipe-component>


@endsection


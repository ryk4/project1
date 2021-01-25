@extends('layouts.main',['page' => 'recipe'])


@section('content')


<recipe-component :id="{{$id}}"></recipe-component>


@endsection


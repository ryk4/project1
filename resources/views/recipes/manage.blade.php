@extends('layouts.main',['page' => 'manageRecipes'])


@section('content')

<div class="container">
    <div class="row m-4">
        <div class="col-2">
            <a class="btn btn-primary" href='{{url('/recipe/add')}}'>Add recipes</a>    
        </div>
        <div class="col-6 offset-md-1 text-center mb-4">
            <h3 class="">Manage recipes (admin only)</h3>
        </div>

        @isset($recipes)
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Views</th>
                <th scope="col">Date Modified</th>
                <th scope="col">Author (hardcoded)</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              
                  @foreach ($recipes as $recipe)
                  <tr>
                    <th scope="row">{{$recipe->id}}</th>
                    <td>{{$recipe->title}}</td>
                    <td>{{$recipe->viewCounter}}</td>
                    <td>{{$recipe->updated_at}}</td>
                    <td>Rytis Klimavicius</td>
                    <td><a href="#">Edit</a>|
                    
                    <form action="{{route('recipeDelete',$recipe->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>               
                    </form>

                    </td>

                  </tr>
                  @endforeach
            </tbody>
            
          </table>
          
          
             
    </div>
    <div class="justify-content-center">
        {{ $recipes->links() }}
    </div>
    @endisset

</div>


@endsection
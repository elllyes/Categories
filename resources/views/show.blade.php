@extends('layouts.app')

@section('content')
<div calss = "px-400px"> <h5><a href="/create">Create another category!!</a></h5></div>
    <body ng-app="category" ng-controller="categoryCtrl">
            <table class="table table-light ">
                <thead>
                    <tr class = "text-left">
                        <th >Category name</th>
                        <th >Short description</th>
                        <th>Long description</th>
                        <th>Enabled</th>
                        <th>Published</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
            
                    <tr @foreach ($categories as $category) >

                        <td>{{ucwords($category->name)}} </td>
                        <td>{{ucwords($category->short_description)}} </td>
                        <td class="text-left w-150px" style = "word-wrap: break-word; max-width: 400px">{{$category->long_description}}</td> 
                        
                        <td>@if ($category->enabled == 1)
                            <i class="fas fa-check-circle" style="color:green"></i>
                        @else 
                            <i class="fas fa-check-circle" style="color:grey"></i>
                         @endif</td> 

                        <td> @if($category->published ==1)
                        <i class="fas fa-check-circle"style="color:green"></i>
                        @else 
                            <i class="fas fa-check-circle" style="color:grey"></i>
                         @endif
                        </td> 
                        <td><a class="btn btn-outline-light btn-link" href="/category/{{$category->name}}/edit" role="button">
                        <i class="fas fa-pencil-alt"></i>Edit
                        </a>
                        </button></td>
                                    
                    </tr @endforeach>                       
                </tbody>
            </table>       
    </body>
@endsection 
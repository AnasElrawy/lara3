
<?php
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
// Paginator::useBootstrapFive();
Paginator::useBootstrapFour();



?>


@extends('layouts.app')

@section('block')


<div class="container-fluid">

<a href="{{route('posts.create')}}" class='btn btn-success'> Create </a> 



<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">posted by</th>
      <th scope="col">image</th>
      <!-- <th scope="col">created_at</th> -->
      <th scope="col">created_at</th>
      <!-- <th scope="col">created_at</th> -->
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

@foreach($posts as $post)
    <tr> 
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->posted_by}}</td>
      <td><img src='{{asset("images/".$post->image)}}' width="100" height="100">
      <!-- <td>{{--$user['created_at']--}}</td> -->
      <!-- <td>{{--$user['created_at']->isoFormat('dddd D');--}}</td> -->
      <td>{{$post->created_at}}</td>
      <!-- <td>{{--$user['created_at']->toDateTimeString();--}}</td> -->
    </td>

      
      
      <td>
        <a href="{{route('posts.show', $post)}}" class='btn btn-info'> Show </a> 
        <a href="{{route('posts.edit', $post->id)}}" class='btn btn-primary'> edit </a>
        <a href="{{route('posts.destroy', $post->id)}}" class='btn btn-danger'> delete </a>
    </td>
              
                </tr>

              @endforeach
                    

    <!-- <tr>
    
      <td>Mark</td>
      <td>Otto</td>
      <td>
        <button type="button" class="btn btn-info">view</button>
        <button type="button" class="btn btn-primary">edit</button>
        <button type="button" class="btn btn-danger">delete</button>
      </td>
    </tr> -->
   

  </tbody>
</table>

{{ $posts->links() }}



</div> 

<!-- @dump($posts) -->

@endsection
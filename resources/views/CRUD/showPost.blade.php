






@extends('layouts.app')

@section('block')


<div class="card text-bg-light mb-3" style="max-width: 20rem;">
  <div class="card-header">Post info</div>
  <div class="card-body">
    <h5 class="card-title">title</h5>
    <p class="card-text">{{$posts['title']}}</p>


    <h5 class="card-title">description</h5>
    <p class="card-text">{{$posts['description']}}</p>

    <h5 class="card-title">User</h5>
    <p class="card-text">{{$posts['posted_by']}}</p>


    <h5 class="card-title">Created At</h5>
    <p class="card-text">{{$posts['created_at']}}</p>

    <h5 class="card-title">image</h5>
    <p class="card-text"><img src='{{asset("images/".$posts->image)}}' width="100" height="100"></p>




  
  </div>
</div>





@dump($posts)

@endsection


<!-- ->isoFormat('dddd D of MMMM YYYY   hh:mm:ss A') -->


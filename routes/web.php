<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




// Route::get('/layout', function () {
//     return view('layouts/app');
// });


// Route::get('/allposts/{name}', function ($name) {

    
//     return "wlecome ya zeft ya $name";
// });



// Route::get('/allposts/{id}', function ($id) {

//     $users = [
//         ["id"=>1, "title"=>"title1", "posted_by"=> "Mohamed"],
//         ["id"=>2, "title"=>"title2", "posted_by"=> "Ahmed"],
//         ["id"=>3, "title"=>"title3", "posted_by"=> "Anas"],
//     ];

    
    
//     foreach($users as $user){
//         if($user['id']==$id){
//             return $user;
//         }

//     }
//     return "<h1 style='color:red'>User not found </h1>";

    
// })->where('id', '[0-9]+');


////////////////////////////////////////////


use App\Http\Controllers\PostsController;


// Route::get('/allposts',[PostsController::class,"index"] )->name("allposts.index");

// Route::get('/showPost/{id}',[PostsController::class,"show"] )->name("post.show");



// Route::get('/deletePost/{id}',[PostsController::class,"destroy"] )->name("post.destroy");



// Route::get('/createPost', [PostsController::class,"createPost"] )->name("post.create");

// Route::post('/createPost', [PostsController::class,"store"] )->name("Post.store");



// Route::get('/post/{id}',[PostsController::class,"update"] )->name("post.update");

// Route::post('/post/{id}',[PostsController::class,"edit"] )->name("post.edit");


Route::resource("posts", PostsController::class);



//   GET|HEAD        posts ....................................................................... posts.index › PostsController@index
//   POST            posts ....................................................................... posts.store › PostsController@store
//   GET|HEAD        posts/create .............................................................. posts.create › PostsController@create
//   GET|HEAD        posts/{post} .................................................................. posts.show › PostsController@show
//   PUT|PATCH       posts/{post} .............................................................. posts.update › PostsController@update
//   DELETE          posts/{post} ............................................................ posts.destroy › PostsController@destroy
//   GET|HEAD        posts/{post}/edit ............................................................. posts.edit › PostsController@edit
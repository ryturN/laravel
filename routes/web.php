<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\blog;
use App\Models\Category;
use App\Models\User;

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


Route::get('/welcome', function () {
    return view('welcome',[
        'title' => 'Welcome'
    ]);
});
Route::get('/about',function(){
    return view('about',[
        'title'=> 'About',
        'name'=>'ryan',
        'image'=> 'ryan.jpg',
        'email' => "ryan@example.com"
    ]);
});
Route::get('/',function(){
    return view('hello',[
        'title' => 'Welcome'
    ]);
});



Route::get('/blog',[BlogController::class,'index']);
Route::get('users/{id}', function ($id) {
    return $id;
});
Route::get('/categories/{category:slug}',function (Category $category){
    return view('blog',[
        'title' => "Post By Category : $category->name",
        'blog' => $category->blogs,
    ]);
});
Route::get('/categories',function(){
    return view('categories',[
        'title'=> 'Blogs Categories',

        'category' => Category::all()
    ]);
});
Route::get('users/blog/{user:username}',function (User $user){
    return view('user_blogs',[
        'title' => $user->name,
        'author' => $user->name,
        'blog' => $user->blogs

    ]);
});
Route::get('/blog/{post:slug}',[BlogController::class,'show']);

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//in view() . specify / means a folder/file->that file create in resources/views/home/index.blade.php --it must have .blade.php extension -- we get output from that view file
/*Route::get('/', function () {
    return view('home.index',[]);
})->name('home.index');*/
Route::view( '/', 'home.index'); // option for upper call method

/*Route::get('/content', function () {
    return view('home.content');
})->name('home.content');*/
Route::view( '/content', 'home.content'); // option for upper call method


//Add direct html
Route::get('/posts', function () {
    return '<h1>Test</h1>';
});
	

$posts = [
		1 => [
			'title' => 'Intro to Laravel',
			'content' => 'This is a short intro to Laravel',
			'is_new' => true,
			'has_comments' => true
		],
		2 => [
			'title' => 'Intro to PHP',
			'content' => 'This is a short intro to PHP',
			'is_new' => false
		]
	];


//For each Loops
Route::get('/loops', function() use ($posts){
	return view('posts.loops',['posts' => $posts]);
});

//Route with parameter codition
//http://127.0.0.1:8000/post/1 
//if you pass any other value then it will give 404 error
// In this we have example of if(),unless(),isset()
//use($posts) function use the specify array its anonamus function
Route::get('/post/{id}', function ($id)  use($posts) {

	abort_if(!isset($posts[$id]),404); // if other value pass then show 404 error - abort_if() use for if that value not found then which would display as output.

    return view('posts.show',['post' => $posts]);
});



//Pass optional parameter with default value -- ? use for optional parameter -- where([variable,condition]) use for validate value
//http://127.0.0.1:8000/display_optional/123
Route::get('/display_optional/{id?}', function ($id=20) {
    return 'Home Post from web.php '.$id;
})->where(['id'=>'[0-9]+'])
->name('home.post');
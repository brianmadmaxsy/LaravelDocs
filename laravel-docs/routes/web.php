<?php

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

//Route::get('/posts', 'PostController@index');
Route::resource('posts', 'PostResourceController');
Route::get('posts/{id}/delete', 'PostResourceController@deletePost');
/*
//Available Router Methods
//The router allows you to register routes that respond to any HTTP verb:
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);


Sometimes you may need to register a route that responds to multiple HTTP verbs. You may do so using the match method. Or, you may even register a route that responds to all HTTP verbs using the any method:

Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('foo', function () {
    //
});

//Redirect Routes
Route::redirect('/here', '/there', 301);
*/

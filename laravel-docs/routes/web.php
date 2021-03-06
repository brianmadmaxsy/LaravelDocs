<?php

use App\Jobs\InsertPersonQueueJob;
use Carbon\Carbon;
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
Route::resource('commands', 'EdaResourceController');
Route::get('commands/{id}/delete', 'EdaResourceController@deleteCommand');

//SampleController routes
Route::get('updatesyncstatus', 'SampleController@updatesyncstatus');
Route::get('usehelper', 'SampleController@useHelper');
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

//Practicing making queues
Route::get('insertSampleModel2/{name}/{age}', function($name,$age){

    //To run queue you have to go to terminal and run php artisan queue:work
    //If you have changes on your code, after your changes run php artisan queue:restart

    $job = (new InsertPersonQueueJob($name,$age)) //use App\Jobs\InsertPersonQueueJob;
        ->delay(Carbon::now()->addSeconds(5)); //use Carbon\Carbon;

    dispatch($job);
});

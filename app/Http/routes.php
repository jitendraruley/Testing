<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

});

//Route::get('/admin/post/example/', [ 'as'=>'admin.home', function () {
//    $url = route('admin.home');
//
//    return "This is the url of Admin Home ".$url;
//
//}]);

Route::resource('post', 'PostController');

Route::auth();

Route::get('/home', 'HomeController@index');

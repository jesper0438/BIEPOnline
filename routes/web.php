<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});

// Regular Routes
Route::resource ( 'book', 'BookController');
Route::resource ( 'loan', 'LoanController');

// Admin Routes
Route::resource ( 'author', 'AuthorController');
Route::resource ( 'category', 'CategoryController');
Route::resource ( 'user', 'UserController');
Route::resource ( 'location', 'LocationController');
Route::resource ( 'copy', 'CopyController');
Route::resource ( 'role', 'RoleController');

Auth::routes();

Route::get      ( '/home','HomeController@index');
Route::get      ( '/help','HelpController@index');
Route::get      ( '/userprofile','UserProfileController@index');

Route::get      ( '/logout', function(){
    Auth::logout();
    return redirect()->route('login');
});

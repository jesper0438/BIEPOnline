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

Route::resource ( 'user', 'UserController');
Route::resource ( 'role', 'RoleController');
Route::resource ( 'location', 'LocationController');
Route::resource ( 'loan', 'LoanController');
Route::resource ( 'book', 'BookController');
Route::resource ( 'copy', 'CopyController');
Route::resource ( 'category', 'CategoryController');

Auth::routes();

Route::get      ( '/home','HomeController@index');
Route::get      ( '/help','HelpController@index');

Route::get      ( '/logout', function(){
    Auth::logout();
    return redirect()->route('login');
});

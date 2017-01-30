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
    return view('admin.index');
});

Route::resource ( 'user', 'UserController');
Route::resource ( 'role', 'RoleController');
Route::resource ( 'location', 'LocationController');
Route::resource ( 'loan', 'LoanController');
Route::resource ( 'author', 'AuthorController');
Route::resource ( 'book', 'BookController');
Route::resource ( 'copy', 'CopyController');
Route::resource ( 'category', 'CategoryController');
/* zelf aangepast */
Route::resource ( 'student', 'StudentController');
Route::resource ( 'admin', 'AdminController');
Route::resource ( 'bookadd', 'AdminController@bookadd');
Route::resource ( 'registerbooks', 'AdminController@registerbooks');
Route::resource ( 'allstudents', 'AdminController@allstudents');
Route::resource ( 'approvestudents', 'AdminController@approvestudents');
Route::resource ( 'returnbooks', 'AdminController@returnbooks');
Route::resource ( 'issuedbooks', 'AdminController@issuedbooks');


Auth::routes();

Route::get      ( '/home','HomeController@index');
Route::get      ( '/logout', function(){
    Auth::logout();
    return redirect()->route('login');
});



//'Auth\LoginController@logout'

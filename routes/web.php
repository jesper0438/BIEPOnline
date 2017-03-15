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
Route::resource ( 'status', 'StatusController');

Auth::routes();

Route::get      ( '/home','HomeController@index');
Route::get      ( '/help','HelpController@index');
Route::get      ( '/userprofile','UserProfileController@index');
Route::post     ( '/userprofile','UserController@update_avatar');

Route::get      ( '/logout', function(){
    Auth::logout();
    return redirect()->route('login');
});

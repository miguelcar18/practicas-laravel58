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

Auth::routes(['verify' => true]);

Route::redirect('/', 'home');
Route::get('refresh-csrf', function () {
    return csrf_token();
})->name('refresh-csrf');

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index', 'middleware' => ['auth', 'verified']]);
Route::resource('user', 'UserController');
Route::get('my-profile', ['as' => 'user.my-profile', 'uses' => 'UserController@myProfile']);
/*
Route::group(['prefix' => '/user/{user}'], function () {
	Route::match(['post', 'put'], 'password/change', ['as' => 'password.change', 'uses' => 'UserController@passwordChange']);
	Route::match(['post', 'put'], 'photo', ['as' => 'user.photo.change', 'uses' => 'UserController@photoChange']);
	Route::get('/groups', ['as' => 'user.groups', 'uses' => 'UserController@getGroups']);
});
*/
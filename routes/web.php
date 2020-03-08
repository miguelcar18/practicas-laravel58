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
Route::get('my-profile', ['as' => 'user.my-profile', 'uses' => 'UserController@myProfile']);
Route::post('photo/{user}', ['as' => 'user.photo.change', 'uses' => 'UserController@photoChange']);
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('user', 'UserController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('inventory', 'InventoryController');
    Route::resource('event', 'EventController');
    Route::get('bill/{id}', ['as' => 'event.bill', 'uses' => 'EventController@bill']);
    Route::post('find_product', ['as' => 'product.find_data', 'uses' => 'ProductController@findData']);
});

Route::get('storage/{filename}', function ($filename) {
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

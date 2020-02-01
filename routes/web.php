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

Route::get('/',[
    'as' => 'home',
    'uses' => 'PageController@index'
]);
Route::get('/images/{image}', function($image){
    $path = storage_path().'/accom/gallery/'.$image;
    if (file_exists($path)) {
        return Response::download($path);
    }
});

Route::get('/drinks',[
    'as' => 'drinks',
    'uses' => 'PageController@drinks'
]);

Route::get('/entertainment',[
    'as' => 'entertainment',
    'uses' => 'PageController@entertainment'
]);

Route::get('/accommodation',[
    'as' => 'accommodation',
    'uses' => 'PageController@accommodation'
]);

Route::get('/contact',[
    'as' => 'contact',
    'uses' => 'PageController@contact'
]);

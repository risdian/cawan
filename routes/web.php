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

// Route::group(['prefix'=>'categories'], function(){

//     //LIST user
//     Route::get('/', 'categoryController@index');

// });


Route::group(['prefix'=>'categories'], function(){

    Route::get('/', 'CategoryController@index');
    Route::get('/create', 'CategoryController@create');
    Route::post('/create', 'CategoryController@store');
    Route::get('/{id}/edit', 'CategoryController@edit')->where(['id'=>'[0-9]+']);
    Route::patch('/{id}/edit', 'CategoryController@update')->where(['id'=>'[0-9]+']);

    Route::delete('/{id}/edit', 'CategoryController@destroy')->where(['id'=>'[0-9]+']);

    Route::delete('{id}', 'CategoryController@destroy');
});

Route::resource('products', 'productController');

Route::post('/product/{product}/attributes', 'productAttributesController@store');

Route::patch('/attributes/{attribute}','productAttributesController@update');


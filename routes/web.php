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

// Route::get('/', function () {
//     return view('welcome');
// });

// Api Routes
Route::get('/','api\IndexController@index' );
Route::get('/categories','api\CategoryController@index' );

Route::get('/products','api\ProductController@index' );

Route::get('/BestSelling','api\ProductController@BestSelling' );

Route::get('/products/{catId}','api\ProductController@show_pro' );
Route::get('/product/{id}','api\ProductController@show' );

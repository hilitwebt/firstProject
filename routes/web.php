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



Route::group(['middleware' => ['web']], function () {   
    // your routes here
Route::get('transactions','TransactionsController@index');//all transactions
Route::post('transactions','TransactionsController@store'); //add transaction
Route::get('categories','CategoriesController@index');//all categories
Route::post('categories','CategoriesController@store'); //add category
Route::put('categories/{id}','CategoriesController@update'); //update category
 });



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});
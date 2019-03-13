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
Route::get('layout', function () {
    return view('layout.master');
});
Route::get('dashboard', function () {
    return view('dashboard.index');
});
Route::get('dashboardd', function () {
    return view('dashboard');
});
Route::get('table', function () {
    return view('category.index');
});
/*Route::get('app', function () {
    return view('master.app');
});
Route::get('category',function()
{
    return "Hello Category";
});
Route::get('category/{id}',function($id)
{
    return "Hello Category ID ".$id;
});*/
//Route::resource('category','categoryController');

Route::resource('category','categoryController')->only(['index','show']);
//Route::resource('category','categoryController')->except(['destroy']);
Route::resource('dataCategory','adminCategory')->except(['destroy']);
Route::get('cari','categoryController@cari');



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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

// https://laravel.com/docs/5.5/routing
Route::get('/items', 'ItemController@index'); // 1 Retrieve -> Llista completa -> Paginació
Route::get('/items/{item}', 'ItemController@show'); // 2 Retrieve -> 1 recurs concret
Route::get('/items_alt/{id}', 'ItemController@show1'); // 2 Retrieve -> 1 recurs concret
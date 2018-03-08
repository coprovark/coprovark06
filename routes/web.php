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




Route::get('/hello', function () {
    return view('hello');
});


Route::get('/profile', function () {
    return view('profile');
});


Route::get('/page1', function () {
    return view('page1');
});

Route::get('/page01', function () {

    $array = [
        "Namaewa" => "",
        "Sex"     => "",
        "ID"      => "",
        "Phone"   => ""
    ];
    return view('page.page01',$array);
});

Route::get('/page02', function () {
    return view('page.page02');
});

Route::get('/page03', function () {
    return view('page.page03');
});

Route::get('/page04', function () {
    return view('page.page04');
});

Route::post('/page','PageController@show');


Route::get('/page10/{id}', function ($id) {

    $array = [
        "ID" => $id
    ];

    return view('page.page10',$array);
});
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

Route::post('/page','PageController@show');
Route::get('/page01', function () {

    $array = [
        "Namaewa" => "",
        "Sex"     => "",
        "ID"      => "",
        "Phone"   => "",
        "password" => ""
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




Route::get('/page10/{id}', function ($id) {

    $array = [
        "ID" => $id
    ];

    return view('page.page10',$array);
});

Route::post('/page11', function () {

    $array = [
        "pass" => "",
    ];

    return view('page.page11',$array);
});

Route::post('/page12','PageController@show_select');
Route::post('/page11','PageController@show_password');

Route::get('/form_reg', function () {
    return view('page.form_reg');
});

Route::get('/form_login', function () {
    return view('page.form_login');
});

Route::post('/check','PageController@show_login');
Route::post('/testf','PageController@show_input');

Route::get('/form_login', function () {

    $array1 = [
        "user" => "",
        "pass"     => "",
    ];
    return view('page.form_login',$array1);
});

Route::get('/test_form', function () {

    $array2 = [
        "IN" => "",
    ];
    return view('page.test_form',$array2);
});




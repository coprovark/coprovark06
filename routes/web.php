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



Route::post('/form_login','PageController@show_login');
Route::get('/form_login', function () {

    $data = [
        "users" => [],
    ];
    return view('page.form_login',$data);
});


// Route ตัวแรกจะรับค่าที่ post มาจากหน้า test_form (action="testf")
Route::post('/testf','PageController@show_input');
Route::get('/test_form', function () {

    $array2 = [
        "IN" => "",
    ];
    return view('page.test_form',$array2);
});
// Route ตัวแรกจะรับค่าที่ post มาจากหน้า page05 (action="cal")
Route::post('/cal','PageController@show_cal');
Route::get('/page05', function () {

    $array05 = ["A" => "",
                "B" => ""];
    return view('page.page05',$array05);
});

Route::post('/form_check_login','PageController@form_check_login');
Route::get('/form_check_login', function () {

    $data = [
        "users" => [],
    ];
    return view('page.form_check_login',$data);
});

//สั่งให้ controller คำนวน
Route::post('/form_login2','PageController@form_login2');

#แสดงหน้าเว็บ
Route::get('/form_login2', function () {
    $array = ['username'=>'',
              'name' => ''];
    return view('page.form_login',$array);
});
#list user
Route::get('/list_users','UsersController@list_users');
Route::post('/list_users_find','UsersController@list_users_find');

// Route::get('delete_user/{id}', function ($id) {
//     return 'User ='.$id;
// }); รันในหน้าตัวเอง

Route::get('/delete_user/{id}','UsersController@delete_users');

Route::post('/form_register_save','UsersController@form_register_save');



Route::get('/formx', function () {
        return view('page.formx');
});

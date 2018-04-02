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
Route::post('/form_register_save2','UsersController@form_register_save2');





//=============================Personal===============================//
// #show_user
// Route::get('/show_user','PersonalController@list_users');
// Route::post('/list_users_find','PersonalController@list_users_find');
#show_user
Route::get('/show_user','PersonalController@show_user');
Route::post('/show_user_find','PersonalController@show_user_find');
//  #form_personal_save
//  Route::get('/form_personal', function () {
//     return view('page.copro_resume.form_personal'); 
// });
 #form_user_save
//  Route::get('/form_user', function () {
//     return view('page.copro_resume.form_user'); 
Route::post('/form_user_save','PersonalController@form_user_save');
// function delete_tbuser
// Route::get('delete_user/{user_id}', function ($user_id) {
//     return 'User ='.$user_id;
// });
Route::get('/delete_tbuser/{user_id}','PersonalController@delete_tbuser');
 #form_user
 Route::get('/form_user', function () {
    return view('page.copro_resume.form_user'); 
});
//********************************************************************************//
#show_title
Route::get('/show_title','PersonalController@show_title');
Route::post('/show_title_find','PersonalController@show_title_find');
#form_user
Route::get('/form_title', function () {
    return view('page.copro_resume.form_title'); 
});
#form_title_save
 Route::post('/form_title_save','PersonalController@form_title_save');
//********************************************************************************//
#show_faculty
Route::get('/show_faculty','PersonalController@show_faculty');
Route::post('/show_faculty_find','PersonalController@show_faculty_find');
#form_user
Route::get('/form_title', function () {
    return view('page.copro_resume.form_title'); 
});
#form_title_save
 Route::post('/form_title_save','PersonalController@form_title_save');
//********************************************************************************//
#show_title
Route::get('/show_mojor','PersonalController@show_mojor');
Route::post('/show_mojor_find','PersonalController@show_mojor_find');
#form_title
Route::get('/form_mojor', function () {
    return view('page.copro_resume.form_mojor'); 
});
#form_title_save
 Route::post('/form_mojor_save','PersonalController@form_mojor_save');
 //********************************************************************************//
#show_type
Route::get('/show_type','PersonalController@show_type');
Route::post('/show_type_find','PersonalController@show_type_find');
#form_type
Route::get('/form_type', function () {
    return view('page.copro_resume.form_type'); 
});
#form_type_save
 Route::post('/form_type_save','PersonalController@form_type_save');
  //********************************************************************************//
#show_institute
Route::get('/show_institute','PersonalController@show_institute');
Route::post('/show_institute_find','PersonalController@show_institute_find');
#form_institute
Route::get('/form_institute', function () {
    return view('page.copro_resume.form_institute'); 
});
#form_institute_save
 Route::post('/form_institute_save','PersonalController@form_institute_save');
 //********************************************************************************//
#show_birthday
Route::get('/show_birthday','PersonalController@show_birthday');
Route::post('/show_birthday_find','PersonalController@show_birthday_find');
#form_birthday
Route::get('/form_birthday', function () {
    return view('page.copro_resume.form_birthday'); 
});
#form_birthday_save
 Route::post('/form_birthday_save','PersonalController@form_birthday_save');
 //********************************************************************************//
#show_gender
Route::get('/show_gender','PersonalController@show_gender');
Route::post('/show_gender_find','PersonalController@show_gender_find');
#form_gender
Route::get('/form_gender', function () {
    return view('page.copro_resume.form_gender'); 
});
#form_gender_save
 Route::post('/form_gender_save','PersonalController@form_gender_save');
 //********************************************************************************//
#show_resume
Route::get('/show_resume','PersonalController@show_resume');
Route::post('/show_resume_find','PersonalController@show_resume_find');
#form_resume
Route::get('/form_resume', function () {
    return view('page.copro_resume.form_resume'); 
});
#form_resume_save
 Route::post('/form_resume_save','PersonalController@form_resume_save');




Route::get('/formx', function () {
        return view('page.formx');
});


Route::get('/view_users','UsersController@view_users');
Route::post('/view_users_find','UsersController@view_users_find');

Route::get('/form_users', function () {
    return view('page.form_users');
});

//List user edit//
Route::get('/list_user_edit/{id}','UsersController@list_user_edit');
// Route::get('/list_user_edit', function () {
//     return view('page.list_user_edit');
// });

Route::get('/newx', function () {
    return view('page.newx');
});

Route::get('/slide_pic', function () {
    return view('page.slide_pic');
});

Route::get('/resume', function () {
    return view('page.copro_resume.resume');
});

Route::get('/form_resume', function () {
    return view('page.copro_resume.form_resume');
});

Route::post('/list_user_update','UsersController@list_user_update');

///////////////////////////file////////////////////////////////////////////////

//**************************************upload********************************************* */
// Route::get('/upload1', function () {
//     return view('file.upload');
// });
// Route::post('/uploader','FileController@uploader');
Route::get('/upload1','FileController@show');
Route::post('/upload1','FileController@upload1');
Route::get('/dl/{path}/{name}','FileController@dl');
Route::get('/rm/{ID}','FileController@rm');
Route::get('/ed/{ID}','FileController@ed');
Route::post('/update1','FileController@update1');//edit
Route::post('api/delete','FileController@deleteItem');//CheckAll delete
<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function list_users()
    {
        $find='';
        $users = DB::table('tblusers')->select('*')->get();
        return view('page.list_users',[
            'data_list'=>$users,
            'find'     =>$find
        ]);
    }

    public function list_users_find(Request $req)
    {
        $find=$req->find;
        $users = DB::table('tblusers')
                            ->select('*')
                            ->where('user_id','=',$find)
                            ->get();
        return view('page.list_users',[
            'data_list'=>$users,
            'find'     =>$find
        ]);
    }

    public function delete_users($id){
        DB::table('tblusers')->where('id', '=', $id)->delete();
        // return 'USER= '.$id;
        return redirect('list_users');
      }

      public function form_register_save(Request $req){

        $status = DB::table('coprovark_06')->insert(
          [
            'sid'       => $req->sid,
            'titleName' => $req->titleName,
            'fullName'  => $req->fullName,
            'gender'    => $req->gender,
            'birthDay'  => $req->birthDay,
            'facultyID'  => $req->facultyID,
            'majorID'  => $req->majorID,
            'address'  => $req->address,
            'mobile'  => $req->mobile,
            'food1'  => $req->food1,
            'food2'  => $req->food2,
            'food3'  => $req->food3,
            'food4'  => $req->food4,
            'username'  => $req->username,
            'password'  => $req->password
          ]
        );
        if($status){
           return redirect('list_users');
        }else{
           return "เกิดข้อผิดพลาด";
        }
    //    return $req;

    }



    public function view_users()
    {
        $find='';
        $users = DB::table('tb_resume')->select('*')->get();
        return view('page.view_users',[
            'data_list'=>$users,
            'find'     =>$find
        ]);
    }

    public function view_users_find(Request $req)
    {
        $find=$req->find;
        $users = DB::table('tblusers')
                            ->select('*')
                            ->where('user_id','=',$find)
                            ->get();
        return view('page.view_users',[
            'data_list'=>$users,
            'find'     =>$find
        ]);
    }

    public function form_register_save2(Request $req){

        $status = DB::table('tblusers')->insert(
          [

            'user_code'  => $req->user_code,
            'user_name'  => $req->user_name,
            'user_password'  => $req->user_password,
            'user_level'  => $req->user_level,
            'user_enable'  => $req->user_enable
          ]
        );
        if($status){
           return redirect('view_users');
        }else{
           return "เกิดข้อผิดพลาด";
        }
    }

    public function list_user_edit(Request $req){
        $find = $req->id;
        $user = DB::table('tblusers')
                         ->select('*')
                         ->where('user_id','=',$find)
                         ->get();
                        //  print_r($find);
        return view('page.list_user_edit',[
                'user'=>$user
        ]);
    }

    public function list_user_update(Request $req){
        $user_id      = $req->user_id;
        $user_code      = $req->user_code;
        $user_name      = $req->user_name;
        $user_password  = $req->user_password;
        $user_level  = $req->user_level;
        $user_enable  = $req->user_enable;
        $data = [
            'user_name'=>$user_name,
            'user_password'=>$user_password,
        ];
        $status = DB::table('tblusers')
                    ->where('user_id', $user_id)
                    ->update($data);
        return redirect('list_users');
    }

    

}
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
        $users = DB::table('coprovark_06')->select('*')->get();
        return view('page.list_users',[
            'data_list'=>$users,
            'find'     =>$find
        ]);
    }

    public function list_users_find(Request $req)
    {
        $find=$req->find;
        $users = DB::table('coprovark_06')
                            ->select('*')
                            ->where('sid','=',$find)
                            ->get();
        return view('page.list_users',[
            'data_list'=>$users,
            'find'     =>$find
        ]);
    }

    public function delete_users($id){
        DB::table('coprovark_06')->where('id', '=', $id)->delete();
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
}
<?php

namespace App\Http\Controllers;

use App\page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function show(Request $rq)
    {
        $txt_name = $rq->input('name');
        $txt_radio = $rq->input('radio');
        $txt_hidden = $rq->input('hidden');
        $txt_checkbox = $rq->input('checkbox');
        $txt_password = $rq->input('password');
        // return $radio;
        // echo "ชือ  $txt_name";
        // echo "<br>";
        // echo "เพศ $txt_radio";
        // echo "<br>";
        // echo "เลขปจต. $txt_hidden <br>";
        // echo "มือถือ $txt_checkbox <br>";
        $array = [
            "Namaewa" => $txt_name,
            "Sex" => $txt_radio,
            "ID" => $txt_hidden,
            "Phone" => $txt_checkbox,
            "password" => $txt_password,
        ];

        return view('page.page01',$array);
    }

    public function show_password(Request $rr){
        return view('page.page11',$rr);
    }


    public function show_select(Request $res){
        return view('page.page12',$res);
    }

    public function show_login(Request $rs)
        {
            //ค่าคงที่ สมมุติว่ามาจาก database
            //ค่าที่รับมา
            $txt_user = $rs->input('username');
            $txt_pass = $rs->input('pass');
            
            $users = DB::select('select * from users where username = ? and password = ?', 
            [$rs['user'],$rs['pass']]
            );
            
            foreach ($users as $value){
              if($txt_user == $value->username){
                  if($txt_pass == $value->password){
                      $data['status'] = "true";
                  }
              }          
            }
            //ส่งค่าไปแสดงผล
            return view('page.form_login',['users'=>$users]);
        }

        //รับมาจาก testf
    public function show_input(Request $rin)
        {
            $txt_input = $rin->input('input');
            
            $array2 = [
                "IN" => $txt_input,
            ];

            return view('page.test_form',$array2);
        }
    
    public function show_cal(Request $rcal)
        {
            $txt_user = $rcal->input('A');
            $txt_pass = $rcal->input('B');

            $array05 = [
                "A" => $txt_user,
                "B" => $txt_pass,
                
            ];

            return view('page.page05',$array05);
        }
//แบบ get
        public function form_check_login(Request $clog)
        {
            $users = DB::select('select * from users where username = ? and password = ?', 
            [$clog['username'],$clog['pass']]
            );
            return view('page.form_check_login',['users'=>$users]) ;
        }

        // public function form_check_login(Request $clg)
        // {
        //     $txt_user1 = $clg->input('user');
        //     $txt_pass1 = $clg->input('pass');

        //     $array06 = [
        //         "user1" => $txt_user1,
        //         "pass1" => $txt_pass1,
                
        //     ];

        //     return view('page.form_check_login',$array06);
        // }

    #login 2
    public function form_login2(Request $res){

        // if($res['username']== 'kssa'){
        //     $res['username'] = 'True';

        // }else{
        //     $res['username'] = 'False'; 
        // }
        $users = DB::table('users')->where([
            ['username','=',$res['username']],
            ['password','=',$res['pass']]
        ])->get();
        //แสดงค่า วนลูปแบบไม่กำหนดจุดจบ ใช้ foreach
        $name ='';
        foreach($users as $value){
            $name = $value->id;
        }
        $res['name'] = $name ;

        return view('page.form_login',$res) ;
    }    
}




<?php

namespace App\Http\Controllers;

use App\page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            $txt_user = $rs->input('user');
            $txt_pass = $rs->input('pass');

            $array1 = [
                "user" => $txt_user,
                "pass" => $txt_pass,
                
            ];

            return view('page.form_login',$array1);
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

}




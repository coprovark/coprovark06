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
            "Phone" => $txt_checkbox
        ];

        return view('page.page01',$array);
    }
}
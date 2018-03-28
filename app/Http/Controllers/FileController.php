<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FileController extends Controller
{

    // รับค่าการส่งไฟล์ 
    public function uploader(Request $req){

        $file = $req->file('uploadfile');
        $name = $req->uploadfilename;
        if ($req->hasFile('uploadfile')) {

            $namefile =  $file->getClientOriginalName();
            $type = $req->uploadfile->extension();
            DB::table('file')->insert(
                [
                    'file_name' => $name, 
                    'file_type' => $type, 
                    'file_path' => $namefile, 
                    ]
            );
 
            $file->move('upload',$file->getClientOriginalName());
            // echo "upload success";
            return redirect('upload1');
        }
        //$path = $req->uploadfile->path();
        //echo $path;
        //$extension = $req->photo->extension();
    }
    //แสดงชื่อไฟล์ในหน้าเดิม
    public function show(){
        $query = DB::table('file')->select('*')->get();
        return view('file.upload',[
            'datatable' => $query,
            'i'=> 1
        ]);
    }
    //download
    public function dl(Request $req){
        return response()->download('upload/'.$req->path);
    }
}
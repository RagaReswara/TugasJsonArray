<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller{
    public function index(){
        $post = DB::table('kelas')->get();

        return response()->json([
            'kelas' => $post            
        ], 200);
    }

    public function getJrs($jurusan){
        $post = DB::table('kelas')->where('jurusan',$jurusan)->get();

        return response()->json([
            'kelas'=> $post
        ],200);
        return $jurusan;
    }

    // public function insertData(request $request){
    //     DB::
    // }

    public function deleteData(request $request){
        DB::table('guru')->where('id_guru',$request->input('id_guru'))->delete();
        return response()->json(
            ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success, Data Berhasil Dihapus"
                ]
            ], 200
        );
    }
    public function deleteDataGuruVersiParam($id){
        DB::table('guru')->where('id_guru',$request->input('id_guru'))->delete();
        return response()->json(
            ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success, Data Berhasil Dihapus"
                ]
            ], 200
        );
    }

}


?>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Input extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function result(Request $request)
    {
        $nilai1 = $request->input('nilaiA');
        $nilai2 = $request->input('nilaiB');
        if($nilai1 >= 80 && $nilai2 >= 80 ) {
            $params = [
                "lulus" => "Selamat Anda Lulus",
                "tidakLulus" => "Anda Tidak Lulus"
            ];
            return view('result', $params);
        }else{
            $params1 = [
                "lulus" => "Anda Tidak Lulus",
                "tidakLulus" => "Anda Tidak Lulus"
            ];
            return view('result',$params1);
        }
    }
}

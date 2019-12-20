<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Matakuliah;
use App\Ruang;
use App\LapPinjam;


class lapPinjamRuangController extends Controller
{
    public function index(Request $request){
        $data = LapPinjam::get();
        return view('index',['data'=>$data]);
    }
}

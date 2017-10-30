<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function LayDanhSachBaiViet(){
        return view("tin-tuc.view-trang-chu");
    }

    public function TimBaiViet(Request $request){
    }
}

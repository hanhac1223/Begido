<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function getDanhMuc(){
        return view('danh-muc-chi-tiet.danh-muc-chi-tiet');
    }

    public function DanhSachBaiVietTheoDanhMuc(Request $request, $plug){
        $bv = new DanhMucModel();
        $bv->url = $plug;
        return view("danh-muc-chi-tiet.danh-muc-chi-tiet",
            [
                "BaiViet" => $bv->BaiVietChiTiet(),
                "BaiVietLienQuan" => $bv->BaiVietLienQuan()
            ]);
    }
}

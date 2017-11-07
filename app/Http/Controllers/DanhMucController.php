<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMucBaiVietModel;


class DanhMucController extends Controller
{
    public function getDanhMuc(){
        return view('danh-muc-chi-tiet.danh-muc-chi-tiet');
    }

    public function DanhSachBaiVietTheoDanhMuc(Request $request, $plug){
        $dm = new DanhMucBaiVietModel();
        $dm->urldanhmucbaiviet = $plug;
        return view("danh-muc-chi-tiet.danh-muc-chi-tiet",
            [
                "ThongTinDanhMuc"            => $dm->LayThonTinDanhMucTheoUrlDanhMuc(),
                "DanhSachBaiVietTheoDanhMuc" => $dm->LayDanhSachBaiVietTheoUrlDanhMuc()
            ]);
    }
}

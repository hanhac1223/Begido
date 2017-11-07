<?php

namespace App\Http\Controllers;

use App\BaiVietModel;
use App\DanhMucBaiVietModel;
use Illuminate\Http\Request;

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
                "ThongTinDanhMuc"            => $dm->LayThongTinDanhMucTheoUrlDanhMuc(),
                "DanhSachBaiVietTheoDanhMuc" => $dm->LayDanhSachBaiVietTheoUrlDanhMuc()
            ]);
    }

//    public function DanhMucBaiVietChiTiet(Request $request){
//        $bv = new BaiVietModel();
//        return view("danh-muc-chi-tiet.danh-muc-chi-tiet",
//            [
//                "BaiViet" => $bv->BaiVietChiTiet(),
//                "BaiVietLienQuan" => $bv->BaiVietLienQuan()
//            ]);
//    }
}

<?php

namespace App\Http\Controllers;

use App\BaiVietModel;
use App\DanhMucBaiVietModel;
use Illuminate\Http\Request;


class DanhMucController extends Controller
{
    public function getDanhMuc(){
        echo "Không có";
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

    public function DanhMucBaiVietChiTiet(Request $request){
        $bv = new BaiVietModel();
        return view("danh-muc-chi-tiet.danh-muc-chi-tiet",
            [
                "BaiViet" => $bv->BaiVietChiTiet(),
                "BaiVietLienQuan" => $bv->BaiVietLienQuan()
            ]);
    }
}

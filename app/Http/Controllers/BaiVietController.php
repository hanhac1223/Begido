<?php

namespace App\Http\Controllers;

use App\BaiVietModel;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function LayDanhSachBaiViet(){
        $bv = new BaiVietModel();
        return view("tin-tuc.view-tin-tuc",
            [
                "Son" => $bv->LayDanhSachBaiVietTheoDanhMuc('4b41af88-bc6d-11e7-a520-0222b57b7d80'),
                "MyPhamTraDiem" => $bv->LayDanhSachBaiVietTheoDanhMuc('5afbb0ae-c0af-11e7-8e15-0222b57b7d80'),
                "ChamSocDa" => $bv->LayDanhSachBaiVietTheoDanhMuc('5b18bc80-c0af-11e7-8e16-0222b57b7d80')
                ]);
    }

    public function BaiVietChiTiet(Request $request, $plug){
        $bv = new BaiVietModel();
        $bv->url = $plug;
        return view("tin-tuc-chi-tiet.tin-tuc-chi-tiet", ["BaiViet" => $bv->BaiVietChiTiet()]);
    }
}

<?php

namespace App\Http\Controllers;

use App\BaiVietModel;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function LayDanhSachBaiViet(){
        $bv = new BaiVietModel();
        return view("tin-tuc.view-tin-tuc", ["DSBaiViet" => $bv->LayDanhSachBaiViet()]);
    }

    public function BaiVietChiTiet(Request $request, $plug){
        $bv = new BaiVietModel();
        $bv->url = $plug;
        return view("tin-tuc-chi-tiet.tin-tuc-chi-tiet", ["BaiViet" => $bv->BaiVietChiTiet()]);
    }
}

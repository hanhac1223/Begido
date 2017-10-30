<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaiVietModel extends Model
{
    public $msbiviet;
    public $danhmucbaiviet;
    public $tieude;
    public $noidung;
    public $url;
    public $anhdaidien;
    public $ngaytaobaiviet;
    public $trangthai;
    public $luotxem;
    public $nhan;

    public function  __construct()
    {
        $this->danhmucbaiviet = new DanhMucBaiVietModel();
    }

    public function  LayDanhSachBaiViet(){
        $query = "âcs";
        $data = DB::select($query);
        return $data;
    }

    public function  TimBaiViet($noiDung){
        $query = "âcs";
        $data = DB::select($query);
        return $data;
    }
}

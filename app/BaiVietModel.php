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
    public $searchtitle;
    public $searchdescription;

    public function  __construct()
    {
        $this->danhmucbaiviet = new DanhMucBaiVietModel();
    }

    public function  LayDanhSachBaiViet(){
        $query = "SELECT
                      msbaiviet,
                      msuser,
                      msdanhmucbaiviet,
                      tieude,
                      noidung,
                      url,
                      anhdaidien,
                      ngaytaobaiviet,
                      trangthai,
                      luotxem,
                      nhan,
                      searchtitle,
                      searchdescription
                    FROM public.\"baiviet\"";
        $data = DB::select($query);
        return $data;
    }

    public function  LayDanhSachBaiVietTheoDanhMuc($danhmucbaiviet){
        $query = "SELECT
                      msbaiviet,
                      msuser,
                      msdanhmucbaiviet,
                      tieude,
                      noidung,
                      url,
                      anhdaidien,
                      ngaytaobaiviet,
                      trangthai,
                      luotxem,
                      nhan,
                      searchtitle,
                      searchdescription
                    FROM public.\"baiviet\"
                    WHERE \"msdanhmucbaiviet\" = '$danhmucbaiviet'
                    LIMIT 6";
        $data = DB::select($query);
        return $data;
    }

    public function  BaiVietChiTiet(){
        $query = "SELECT
                      msbaiviet,
                      msuser,
                      msdanhmucbaiviet,
                      tieude,
                      noidung,
                      url,
                      anhdaidien,
                      ngaytaobaiviet,
                      trangthai,
                      luotxem,
                      nhan,
                      searchtitle,
                      searchdescription
                    FROM public.\"baiviet\"
                    WHERE  url = '$this->url'";
        $data = DB::select($query);
        return $data;
    }
}

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
                      bv.msuser,
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
                      searchdescription,
                      nd.msuser,
                      houser,
                      tenuser,
                      emailuser
                    FROM public.\"baiviet\" bv, public.\"nguoidung\" nd
                    WHERE nd.msuser = bv.msuser AND bv.msdanhmucbaiviet = '$danhmucbaiviet' AND trangthai = 1
                    LIMIT 6";
        $data = DB::select($query);
        return $data;
    }

    public function  BaiVietChiTiet(){
        $query = "UPDATE public.baiviet SET luotxem = luotxem + 1
                      WHERE url = '$this->url'";
        $data = DB::update($query);
        $query = "SELECT
                      msbaiviet,
                      bv.msuser,
                      bv.msdanhmucbaiviet,
                      tieude,
                      noidung,
                      url,
                      anhdaidien,
                      ngaytaobaiviet,
                      trangthai,
                      luotxem,
                      nhan,
                      searchtitle,
                      searchdescription,
                      dm.msdanhmucbaiviet,
                      tendanhmucbaiviet,
                      danhmucbaivietcha,
                      urldanhmucbaiviet,
                      tongbaiviet,
                      shorttextdanhmuc,
                      pagetextdanhmuc,
                      nd.msuser,
                      houser,
                      tenuser,
                      emailuser
                    FROM public.baiviet bv, public.danhmucbaiviet dm, public.nguoidung nd
                    WHERE bv.msdanhmucbaiviet = dm.msdanhmucbaiviet
                      AND nd.msuser = bv.msuser
                    AND bv.url = '$this->url'
                    LIMIT  1";
        $data = DB::select($query);
        return $data;
    }

    public function BaiVietLienQuan( ){
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
                    WHERE \"msdanhmucbaiviet\" IN (
                        SELECT msdanhmucbaiviet
                        FROM baiviet
                        WHERE
                          url = '$this->url') AND trangthai = 1
                    ORDER BY luotxem DESC
                    LIMIT 6";
        $data = DB::select($query);
        return $data;
    }


}

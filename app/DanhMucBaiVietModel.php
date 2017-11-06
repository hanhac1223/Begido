<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucBaiVietModel extends Model
{
    public $msdanhmucbaiviet;
    public $tendanhmucbaiviet;
    public $danhmucbaivietcha;
    public $urldanhmucbaiviet;
    public $tongbaiviet;

    public function LayDanhSachBaiVietTheoDanhMuc() {
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
                    WHERE \"msdanhmucbaiviet\" = '$msdanhmucbaiviet'";
        $data = DB::select($query);
        return $data;
    }
}

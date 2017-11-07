<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
                    WHERE \"msdanhmucbaiviet\" = '$this->msdanhmucbaiviet'";
        $data = DB::select($query);
        return $data;
    }

    public function DanhSach($limit) {
        $query = "SELECT  * FROM public.danhmucbaiviet
                    ORDER BY tongbaiviet DESC, tendanhmucbaiviet
                    LIMIT $limit";
        $data = DB::select($query);
        return $data;
    }
}

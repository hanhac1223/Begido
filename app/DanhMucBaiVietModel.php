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

    public function LayThonTinDanhMucTheoUrlDanhMuc() {
        $query = "SELECT msdanhmucbaiviet, 
                         tendanhmucbaiviet, 
                         danhmucbaivietcha, 
                         urldanhmucbaiviet, 
                         tongbaiviet, 
                         shorttextdanhmuc, 
                         pagetextdanhmuc
	              FROM public.\"danhmucbaiviet\" 
	              WHERE urldanhmucbaiviet = '$this->urldanhmucbaiviet'";
        $data = DB::select($query);
        return $data;
    }

    public function LayDanhSachBaiVietTheoUrlDanhMuc() {
        $query = "SELECT msbaiviet, 
                         tenuser, 
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
                  FROM public.\"baiviet\", public.\"nguoidung\"
                  WHERE msdanhmucbaiviet = (SELECT msdanhmucbaiviet FROM public.danhmucbaiviet WHERE urldanhmucbaiviet = '$this->urldanhmucbaiviet')
                  ORDER BY ngaytaobaiviet DESC";
        $data = DB::select($query);
        return $data;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
=======

>>>>>>> c3cda239d2baa66f2bd218e4207936f4747b14f0
class DanhMucBaiVietModel extends Model
{
    public $msdanhmucbaiviet;
    public $tendanhmucbaiviet;
    public $danhmucbaivietcha;
    public $urldanhmucbaiviet;
    public $tongbaiviet;

<<<<<<< HEAD
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
=======
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
>>>>>>> c3cda239d2baa66f2bd218e4207936f4747b14f0
        $data = DB::select($query);
        return $data;
    }

<<<<<<< HEAD
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
=======
    public function DanhSach($limit) {
        $query = "SELECT  * FROM public.danhmucbaiviet
                    ORDER BY tongbaiviet DESC, tendanhmucbaiviet
                    LIMIT $limit";
>>>>>>> c3cda239d2baa66f2bd218e4207936f4747b14f0
        $data = DB::select($query);
        return $data;
    }
}

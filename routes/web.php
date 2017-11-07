<?php
Route::get('/', "BaiVietController@LayDanhSachBaiViet");

Route::get('/bai-viet/{plug}',"BaiVietController@BaiVietChiTiet");

<<<<<<< HEAD
//
//Route::get('/danh-muc/{plug}',"DanhMucController@DanhSachBaiVietTheoDanhMuc");
//
=======
>>>>>>> 566a98a38ff981ae63b052ba6c6b46cb3da518aa
Route::prefix('/danh-muc')->group(function () {
    Route::get('/', 'DanhMucController@getDanhMuc');
    Route::get('/{plug}', 'DanhMucController@DanhSachBaiVietTheoDanhMuc');
});

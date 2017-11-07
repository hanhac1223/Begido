<?php
Route::get('/', "BaiVietController@LayDanhSachBaiViet");

Route::get('/bai-viet/{plug}',"BaiVietController@BaiVietChiTiet");

<<<<<<< HEAD

Route::get('/danh-muc/{plug}',"DanhMucController@DanhSachBaiVietTheoDanhMuc");
=======
Route::prefix('/danh-muc')->group(function () {
    Route::get('/', 'DanhMucController@DanhMucBaiVietChiTiet');
    Route::get('/{plug}', 'DanhMucController@getDanhMuc');
});
>>>>>>> c3cda239d2baa66f2bd218e4207936f4747b14f0

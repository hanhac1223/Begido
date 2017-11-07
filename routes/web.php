<?php
Route::get('/', "BaiVietController@LayDanhSachBaiViet");

Route::get('/bai-viet/{plug}',"BaiVietController@BaiVietChiTiet");

Route::prefix('/danh-muc')->group(function () {
    Route::get('/', 'DanhMucController@DanhMucBaiVietChiTiet');
    Route::get('/{plug}', 'DanhMucController@getDanhMuc');
});

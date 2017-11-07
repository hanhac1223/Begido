<?php
Route::get('/', "BaiVietController@LayDanhSachBaiViet");

Route::get('/bai-viet/{plug}',"BaiVietController@BaiVietChiTiet");

Route::prefix('/danh-muc')->group(function () {
    Route::get('/', 'BaiVietController@LayDanhSachBaiViet');
    Route::get('/{plug}', 'DanhMucController@DanhSachBaiVietTheoDanhMuc');
});

<?php
//Route::get('/amp', function () {
//    return view('master-amp');
//});

Route::get('/', "BaiVietController@LayDanhSachBaiViet");

Route::get('baiviet/{plug}',"BaiVietController@BaiVietChiTiet");

Route::get('danhmuc',"DanhMucController@getDanhMuc");

//Route::get('danhmuc/{plug}',"DanhMucController@getDanhMuc");
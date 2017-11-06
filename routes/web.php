<?php
//Route::get('/amp', function () {
//    return view('master-amp');
//});

Route::get('/', "BaiVietController@LayDanhSachBaiViet");

//Route::get('/{plug}',"BaiVietController@BaiVietChiTiet");

Route::get('/danhmuc',"DanhMucController@getDanhMuc");
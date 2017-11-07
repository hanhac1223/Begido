<?php
Route::get('/', "BaiVietController@LayDanhSachBaiViet");

Route::get('/bai-viet/{plug}',"BaiVietController@BaiVietChiTiet");


Route::get('/danh-muc/{plug}',"DanhMucController@DanhSachBaiVietTheoDanhMuc");
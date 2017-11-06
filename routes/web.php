<?php
Route::get('/', "BaiVietController@LayDanhSachBaiViet");

Route::get('bai-viet/{plug}',"BaiVietController@BaiVietChiTiet");

Route::get('/damh-muc',"DanhMucController@getDanhMuc");

Route::get('/damh-muc/{plug}',"DanhMucController@getDanhMuc");
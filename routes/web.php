<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/sanphamchitiet', function () {
    return view('sanpham.sanphamchitiet');
});

Route::get('/danhmuc', function () {
    return view('view-danh-muc-san-pham');
});


Route::get('/tintucchitiet', function () {
    return view('tin-tuc-chi-tiet');
});

Route::get('/tintuc', function () {
    return view('view-tin-tuc');
});

Route::get('/thuonghieu', function () {
    return view('danh-sach-thuong-hieu');
});

Route::get('/khuyenmai', function () {
    return view('view-khuyen-mai');
});

Route::get('/gioithieu', function () {
    return view('view-gioi-thieu');
});

Route::get('/lien-he-gop-y', function () {
    return view('view-lien-he-gop-y');
});

Route::get('/amp', function () {
    return view('amp');
});

Route::get('/giohang', function () {
    return view('view-gio-hang');
});

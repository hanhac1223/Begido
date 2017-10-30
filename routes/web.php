<?php
Route::get('/amp', function () {
    return view('master-amp');
});

Route::get('/', "BaiVietController@LayDanhSachBaiViet");

Route::prefix('template')->group(function (){
    Route::get('/them', 'TemplateController@DanhSach');
    Route::post('postThem', 'TemplateController@postThem');

});
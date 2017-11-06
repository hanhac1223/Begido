<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function getDanhMuc(){
        return view('danh-muc-chi-tiet.danh-muc-chi-tiet');
    }
}

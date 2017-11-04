<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function DanhSach(){
        return view("template.submit");
    }
    public function postThem( Request $request)
    {
        echo $request->txtTieuDe;
        echo $request->sel;
        echo $request->input('txtTieuDe');
        echo $request->input("sel");
    }
}

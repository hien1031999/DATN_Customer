<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function baloIndex() {
        return view('user.page.danhmucpage.balo');
    }

    public function tuixachIndex() {
        return view('user.page.danhmucpage.tuixach');
    }

    public function valiIndex() {
        return view('user.page.danhmucpage.vali');
    }
    public function sanphammoiIndex() {
        return view('user.page.danhmucpage.sanphammoi');
    }
    public function sanphamnoibatIndex() {
        return view('user.page.danhmucpage.SP_NoiBat');
    }
    public function khuyenmaiIndex() {
        return view('user.page.danhmucpage.khuyenmai');
    }
    public function xemthemIndex() {
        return view('user.page.danhmucpage.xemthem');
    }

}

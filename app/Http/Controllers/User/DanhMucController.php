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
    
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    public function index() {
        return view('user.page.tintuc');
    }
    public function chitiettintuc() {
        return view('user.page.chitiettintuc');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Gr User
Route::group(['namespace' => 'User'], function() {
    Route::get('/trangchu', 'TrangChuController@index')->name('trangchu');
    Route::get('/sanpham', 'SanPhamController@index')->name('sanpham');
    Route::get('/tintuc', 'TinTucController@index')->name('tintuc');
    Route::get('/chitietsanpham', 'CTSPController@index')->name('chitietsanpham');
    Route::get('/chitiettintuc', 'TinTucController@chitiettintuc')->name('chitiettintuc');
    Route::get('/dangnhapdangky', 'DangNhapDangKyController@index')->name('dangnhapdangky');
    Route::get('/giohang', 'GioHangController@index')->name('giohang');
    Route::get('/thanhtoan', 'ThanhToanController@index')->name('thanhtoan');
    Route::get('/gioithieu', 'GioiThieuController@index')->name('gioithieu');
    Route::get('/lienhe', 'LienHeController@index')->name('lienhe');
});

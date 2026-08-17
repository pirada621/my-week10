<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "ยินดีต้อนรับสู่เว็บไซต์ของฉัน <a href='".route('login')."'>Login</a>";
});

Route::get('about', function () {
    return "เกี่ยวกับเรา";
});

Route::get('blog/{id}', function ($id) {
    return "บทความของเรา".$id;
});

Route::get('admin/user/may', function () {
    return "<h1>ยินดีต้อนรับ Admin</h1>";
})->name('login');

Route::fallback(function () {
    return "ไม่พบหน้า";
});

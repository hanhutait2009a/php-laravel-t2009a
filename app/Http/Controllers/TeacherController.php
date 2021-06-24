<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function Create(){
        return 'Tạo Mới Gỉang Viên';
    }
    public function Update(){
        return 'Sửa Thông Tin Gỉang Viên';
    }
    public function Delete(){
        return 'Xóa Gỉang Viên';
    }
}

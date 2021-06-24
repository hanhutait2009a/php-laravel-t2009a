<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function Create(){
        return 'Tạo Mới Sinh Viên';
    }
    public function Update(){
        return 'Sửa Thông Tin Sinh Viên';
    }
    public function Delete(){
        return 'Xóa Sinh Viên';
    }
}

<?php


use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
//Bài Tập Laravel Routing
Route::get('/home',function (){
   return view('homeQLTH');
});
//SinhVien
Route::get('/home/createStudent',[StudentController::class,'Create']);
Route::get('/home/updateStudent',[StudentController::class,'Update']);
Route::get('/home/deleteStudent',[StudentController::class,'Delete']);

//GiangVien
Route::get('/home/createTeacher',[TeacherController::class,'Create']);
Route::get('/home/updateTeacher',[TeacherController::class,'Update']);
Route::get('/home/deleteTeacher',[TeacherController::class,'Delete']);


// Xử lý dữ liệu trong request
Route::get('/user/register', [UserController::class,'Register']);
Route::post('/user/register', [UserController::class,'XlRegister']);
Route::get('/user/UserDetail/{id}', [UserController::class,'getUserDetail']);



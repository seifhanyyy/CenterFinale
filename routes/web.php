<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/logout', function () {
    Auth::logout();
    return view('welcome');
});
Route::get('/AddTeacher', function () {
    if (Auth::user()->type == 1) {
        return view('AddTeacher');
    } else if (Auth::user()->type == 2) {
        return view('Teacher');
    } else if (Auth::user()->type == 3) {
        return view('Student');
    } else {
        return view('welcome');
    }
});
Route::get('/Transfer', function () {
    if (Auth::user()->type == 1) {
        return view('Transfer');
    } else if (Auth::user()->type == 2) {
        return view('Teacher');
    } else if (Auth::user()->type == 3) {
        return view('Student');
    } else {
        return view('welcome');
    }
});

Route::get('/addclass', function () {
    if (Auth::user()->type == 1) {
        return view('addclass');
    } else if (Auth::user()->type == 2) {
        return view('Teacher');
    } else if (Auth::user()->type == 3) {
        return view('Student');
    } else {
        return view('welcome');
    }
});
Route::get('/faq', function () {
    return view('faq');
});
//Route::get('generate-pdf', 'PdfGenerateController@pdfview')->name('generate-pdf');
Route::get('/pdf', function () {
    return view("route('Grade',['download'=>'pdf'])");
});

Route::get('pdf',array('as'=>'Grade','uses'=>'PdfGenerateController@pdfview'));


Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token');
Route::post('password/reset', 'ResetPasswordController@reset');



Route::get('/studentclasses', 'StudentController@ViewStudentClasses');
Route::get('/insert', 'StudentController@EnrollStudent');
Route::get('/editclass', 'AdminController@SelectedEditClass');
Route::get('/ramez', 'AdminController@EditClass');


Route::get('/teacherclasses', 'TeacherController@ViewTeacherClasses');
Route::get('/view', 'TeacherController@ViewEnrolledStudents');
Route::get('/adminclasses', 'AdminController@ViewClasses');
Route::get('/DropClass', 'StudentController@DropClass');
Route::get('/TransferStudent', 'AdminController@TransferStudent');
Route::get('/SelectedProfile', 'TeacherController@ViewSelectedProfile');

Route::get('/seif', 'AdminController@AddClasses'); //bt3t classes

Route::get('/send-sms', ['as' => 'send.sms', 'uses' => 'SendSMSController@sendSMS']);

Route::get('Grade', 'uploadgradescontroller@GetGrades')->name('Grade');
Route::get('UploadGrade', 'uploadgradescontroller@ShowAllStudents')->name('UploadGrade');
Route::get('/insertgrades', 'uploadgradescontroller@AddGrades');
Route::get('/updategrades', 'uploadgradescontroller@UpdateGrades');



Auth::routes();
Route::get('/Admin', 'AdminController@CheckUserType');
Route::get('/Teacher', 'TeacherController@CheckUserType');
Route::get('/profile', 'ProfileController@ViewProfileStudent')->name('deeeeb');


Route::post('/profileUpdated', 'ProfileController@SetImage')->name('seifouzaelrashash');
Route::get('/profileUpdated', 'ProfileController@ViewProfileStudent');

Route::get('/Student', 'StudentController@CheckUserType')->middleware('auth');







Route::get('/Adminclasses', 'studentclass@list');

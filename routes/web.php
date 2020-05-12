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
    if(Auth::user()->type == 1){
    return view('AddTeacher');
    }
    else if (Auth::user()->type==2){
        return view('Teacher');
    }
    else if(Auth::user()->type==3){
        return view('Student');
    }
    else{
        return view('welcome');
    }
});
Route::get('/Transfer', function () {
    if(Auth::user()->type == 1){
    return view('Transfer');
    }
    else if (Auth::user()->type==2){
        return view('Teacher');
    }
    else if(Auth::user()->type==3){
        return view('Student');
    }
    else{
        return view('welcome');
    }
});

Route::get('/addclass', function () {
    if(Auth::user()->type == 1){
    return view('addclass');
    }
    else if (Auth::user()->type == 2)
    {
        return view('Teacher');

    }
    else if(Auth::user()->type==3){
        return view('Student');
    }
    else{
        return view('welcome');
    }
});

Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token');
    Route::post('password/reset', 'ResetPasswordController@reset');
    Route::get('/studentclasses', 'studentclass@students');
    Route::get('/insert', 'studentclass@insert');
    Route::get('/editclass', 'studentclass@editclass');
    Route::get('/ramez', 'studentclass@update');
    Route::get('/teacherclasses', 'studentclass@teachers');
    Route::get('/view', 'studentclass@view');
    Route::get('/adminclasses', 'studentclass@admin');
    Route::get('/DropClass', 'studentclass@Delete');



    Route::get('Grade', 'gradescontroller@index')->name('Grade');
    Route::get('UploadGrade', 'uploadgradescontroller@index')->name('UploadGrade');
    Route::get('/insertgrades', 'uploadgradescontroller@insert');
    Route::get('/updategrades', 'uploadgradescontroller@update');
    Route::get('/TransferStudent', 'studentclass@Transfer');
    Route::get('/viewprofile2', 'studentclass@viewprofile2');


Auth::routes();
Route::get('/Admin', 'AdminController@index');
Route::get('/Teacher', 'TeacherController@index');
Route::get('/hooodaa', 'HomeController@index')->name('deeb');
Route::get('/profile', 'ProfileController@view')->name('deeeeb');
Route::get('/seif', 'studentclass@addclass'); //bt3t classes


Route::post('/profileUpdated', 'ProfileController@index')->name('seifouzaelrashash');
Route::get('/profileUpdated', 'ProfileController@view');

Route::get('/Student', 'StudentController@index')->middleware('auth');
Route::get('/Adminclasses', 'studentclass@list');




?>


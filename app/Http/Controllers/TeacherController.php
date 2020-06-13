<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\classes;
use Illuminate\Support\Facades\DB;
use App\studentandclass;


class TeacherController extends Controller
{
    //
    public function CheckUserType()//check if he is admin or student or teacher
    { if(Auth::user()->type ==1)
        {
        return view('Admin');
        }
     
        else if (Auth::user()->type == 2)
        {
        return view('Teacher');
        }else
        {
               
        return view('Student');
        echo"<script>Alert(Admins Only Sorry hacker);</script>";
            }
        
 
    }
    public function ViewTeacherClasses()//Teacher Classes
    {

        $data = classes::all();
        return view('teacherclasses', ['data' => $data]);
    }
    public function ViewEnrolledStudents(Request $request)//view all enrolled students
    {
        $classId = $request->input('classId');
        $data = studentandclass::all();
        return view('viewstudents', ['data' => $data], ['classId' => $classId]);
    }
    
    public function ViewSelectedProfile(Request $request)//the selected profile to see who is this studennt
    {
        $userId = $request->input('userId');
        $users = DB::Select("Select * from users where id = $userId");
        $grades = DB::select("select * from grades where sid = $userId");
        return view('/SelectedProfile', ['users' => $users], ['grades'=>$grades]);
    }
}

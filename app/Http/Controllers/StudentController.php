<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\classes;
use Illuminate\Support\Facades\DB;

use App\studentandclass;

class StudentController extends Controller
{
    //

    public function CheckUserType()
    {
        if(Auth::user()->type ==1)
        {
        return view('Admin');
        }
     
        else if (Auth::user()->type == 2)
        {
        return view('Teacher');
        }else if(Auth::user()->type == 3)
        {
               
        return view('Student');
        echo"<script>Alert(Admins Only Sorry hacker);</script>";
            }
         
 
    }
    public function ViewStudentClasses()// StudentCLasses
    {
        $data = classes::all();
        return view('studentclasses', ['data' => $data]);
    }
    public function EnrollStudent(Request $request) //enrolls student in a class
    {
        $classId = $request->input('classId');
    
        $data = array('studentId' => Auth::user()->id, "classId" => $classId);
        DB::table('studentandclasses')->insert($data);
        $capacity = $request->input('capacity');
        $capacity--;
        DB::table('classes')->where('id', $classId)->update(['capacity' => $capacity]);
        return view('Student');

    }
    public function DropClass(Request $request) //drops student from a class
    {
        $classId = $request->input('classId');
    $alpha=Auth::user()->id;
        DB::table('studentandclasses')->where('studentId',$alpha)
        ->where('classId',$classId)
        ->delete();
        $capacity = $request->input('capacity');
        $capacity++;
        DB::table('classes')->where('id', $classId)->update(['capacity' => $capacity]);
        return view('Student');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class uploadgradescontroller extends Controller
{
    public function ShowAllStudents()//byreturn all students
    {
        $x = AUTH::user()->name;
        $y = AUTH::user()->lastName;
        $name = $x." ".$y;
        $uploadgrade = DB::select("select * from users INNER JOIN studentandclasses on users.id = studentandclasses.studentId
        INNER JOIN classes on studentandclasses.classId=classes.id where classes.teacher='$name'");
        //$statment2 = DB::select("select * from classes where teacher='$x'");
        //$uploadgrade = DB::select("select name,selected,courseid from $statment1 UNION $statment2");
        //$uploadgrade = DB::select("select * from users");
        return view('UploadGrade', ['uploadgrade' => $uploadgrade]);
    }

    function UpdateGrades(Request $request)//update Grades
    {
        $week = $request->input('QuizWeek');
        $grade = $request->input('Grade');
        $sid = $request->input('id');
        $cid = $request->input('courseId');
        DB::update("update grades set quizweek=$week, grade=$grade where sid=$sid AND courseId=$cid");
        return view("/Teacher");
    }


    public function AddGrades(Request $request)// insertGrades
    {
        $week = $request->input('QuizWeek');
        $grade = $request->input('Grade');
        $sid = $request->input('id');
        $cid = $request->input('courseId');
        $alpha=$request->input('GradeOutOF');
        $alphaalpah=$grade.'/'.$alpha;
        $data = array('sid' => $sid,"courseId"=>$cid, "quizweek" => $week, "grade" => $alphaalpah);
        DB::table('grades')->insert($data);
        return view("/Teacher");
    }
    public function GetGrades(){
        $grades = DB::select('select * from grades');
        return view('Grade',['grades'=>$grades]);
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\classes;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function CheckUserType()
    {
        if (Auth::user()->type == 1) {
            return view('Admin');
        } else if (Auth::user()->type == 2) {
            return view('Teacher');
        } else {

            return view('Student');
            echo "<script>Alert(Admins Only Sorry hacker);</script>";
        }
    }
    public function SelectedEditClass(Request $request) //by5tar al class id ally hyt3mlo edit
    {
        $classId = $request->input('classId');
        return view('editclass', ['classId' => $classId]);
    }
    public function EditClass(Request $request) //byupdate class day time capacity
    {
        $classId = request('classId');
        $day = request('day');
        $subject = request('subject');
        $teacher = request('teacher');
        $starts = request('starts');
        $ends = request('ends');
        $capacity = request('capacity');
        $year = request('year');
        $gender = request('gender');
        DB::update("Update classes set day = '$day', subject = '$subject',teacher = '$teacher',starts = '$starts'
        ,ends = '$ends',capacity = '$capacity',year = '$year',gender = '$gender' where id = '$classId'");
        $data = classes::all();
        return view('adminclasses', ['data' => $data]);
    }
    public function ViewClasses()
    {

        $data = classes::all();
        return view('adminclasses', ['data' => $data]);
    }
    public function TransferStudent(Request $request)
    {
        $classId = $request->input('classId');
        $newclass = $_GET['newclass'];
        $studentId = $request->input('studentId');
        $capacity = $request->input('capacity');
        $capacity++;
        $capacity1 = DB::select("select capacity from classes where id=$newclass");
        foreach ($capacity1 as $c) {
            $x = $c->capacity;
        }
        $x--;
        DB::table('classes')->where('id', $classId)->update(['capacity' => $capacity]);
        //DB::table('studentandclasses')->where(['classId'=>$classId] AND ['studentId'=>$studentId])->update(['classId' => $newclass]);
        DB::update("update studentandclasses set classId = '$newclass' where classId='$classId' AND studentId='$studentId'");
        DB::table('classes')->where('id', $newclass)->update(['capacity' => $x]);
        return view('Admin');
    }
    public function AddClasses(Request $request)
    {
        //$teacher = $request->$selected_val;

        //$classId = $request->input('classId');
        $day = $request->input('day');
        $subject = $request->input('subject');
        $teacher = $request->input('teacher');
        $starts = $request->input('starts');
        $ends = $request->input('ends');
        $capacity = $request->input('capacity');
        $year = $request->input('year');
        $gender = $request->input('gender');
        // DB::insert("INSERT INTO classes(day, subject, teacher, starts, ends, capacity, year, gender) VALUES 
        // ($day,$subject,$teacher,$starts,$ends,$capacity,$year,$gender)");
        $data = array(
            'day' => $day, 'subject' => $subject, 'teacher' => $teacher, 'starts' => $starts, 'ends' => $ends, 'capacity' => $capacity, 'year' => $year, 'gender' => $gender
        );
        //$data = array($day,$subject,$teacher,$starts,$ends,$capacity,$year,$gender);
        DB::table('classes')->insert($data);
        //DB::insert("Insert $data into classes");
        return view('addclass');
    }
}

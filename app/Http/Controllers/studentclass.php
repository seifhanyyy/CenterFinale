<?php

namespace App\Http\Controllers;

use App\classes;
use App\studentandclass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class studentclass extends Controller
{
    public function __construct()
    {

        //$this->middleware('auth');

    }
    public function index()
    {
        return view('adminclasses');
    }
    //
    public function admin()
    {

        //$classx=DB::table('classes')->where('id',$id)->get();
        $data = classes::all();
        return view('adminclasses', ['data' => $data]);
    }
    public function students()
    {
        //$classx=DB::table('classes')->where('id',$id)->get();
        $data = classes::all();
        return view('studentclasses', ['data' => $data]);
    }
    public function teachers()
    {

        //$classx=DB::table('classes')->where('id',$id)->get();
        $data = classes::all();
        return view('teacherclasses', ['data' => $data]);
    }
    public function viewstudents()
    {

        //$classx=DB::table('classes')->where('id',$id)->get();
        $data = studentandclass::all();
        return view('viewstudents', ['data' => $data]);
    }
    public function view(Request $request)
    {
        $classId = $request->input('classId');
        $data = studentandclass::all();
        return view('viewstudents', ['data' => $data], ['classId' => $classId]);
    }
    public function editclass(Request $request)
    {
        $classId = $request->input('classId');
        return view('editclass', ['classId' => $classId]);
    }
    public function update(Request $request)
    {
        //$teacher = $request->$selected_val;

        $classId = $request->input('classId');
        $day = $request->input('day');
        $subject = $request->input('subject');
        $teacher = $request->input('teacher');
        $starts = $request->input('starts');
        $ends = $request->input('ends');
        $capacity = $request->input('capacity');
        $year = $request->input('year');
        $gender = $request->input('gender');
        DB::update("Update classes set day = '$day', subject = '$subject',teacher = '$teacher',starts = '$starts'
        ,ends = '$ends',capacity = '$capacity',year = '$year',gender = '$gender' where id = '$classId'");
        $data = classes::all();
        return view('adminclasses', ['data' => $data]);
    }
    public function addclass(Request $request)
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
         $data = array('day' => $day, 'subject' => $subject, 'teacher' => $teacher, 'starts' => $starts
         , 'ends' => $ends, 'capacity' => $capacity, 'year' => $year, 'gender' => $gender);
        //$data = array($day,$subject,$teacher,$starts,$ends,$capacity,$year,$gender);
        DB::table('classes')->insert($data);
        //DB::insert("Insert $data into classes");
        return view('addclass');
    }
    // protected function update(array $data)
    // {
    //     return classes::update([
    //         'day' => $data['day'],
    //         'subject'=>$data['subject'],
    //         'teacher' => $data['teacher'],
    //         'starts'=>$data['starts'],
    //         'ends'=>$data['ends'],
    //         'capacity'=>$data['capacity'],
    //         'year'=>$data['year'],
    //         'gender'=>$data['gender']
    //     ])
    //     ->where("classes.id = $data['classId']");
    // }
    
    public function insert(Request $request)
    {
        $classId = $request->input('classId');
    
        $data = array('studentId' => Auth::user()->id, "classId" => $classId);
        DB::table('studentandclasses')->insert($data);
        //////////////////////////////////////////////////////
        $capacity = $request->input('capacity');
        $capacity--;
        DB::table('classes')->where('id', $classId)->update(['capacity' => $capacity]);
        return view('Student');

    }
    public function Delete(Request $request)
    {
        $classId = $request->input('classId');
    $alpha=Auth::user()->id;
        DB::table('studentandclasses')->where('studentId',$alpha)
        ->where('classId',$classId)
        ->delete();
        //////////////////////////////////////////////////////
        $capacity = $request->input('capacity');
        $capacity++;
        DB::table('classes')->where('id', $classId)->update(['capacity' => $capacity]);
        return view('Student');
    }
    public function Transfer(Request $request)
    {
        $classId = $request->input('classId');
        $newclass = $_GET['newclass'];
        $studentId= $request->input('studentId');
        $capacity = $request->input('capacity');
        $capacity++;
        $capacity1=DB::select("select capacity from classes where id=$newclass");
        foreach($capacity1 as $c){
            $x=$c->capacity;
        }
        $x--;
        DB::table('classes')->where('id',$classId)->update(['capacity' => $capacity]);
        //DB::table('studentandclasses')->where(['classId'=>$classId] AND ['studentId'=>$studentId])->update(['classId' => $newclass]);
        DB::update("update studentandclasses set classId = '$newclass' where classId='$classId' AND studentId='$studentId'" );
        DB::table('classes')->where('id',$newclass)->update(['capacity' => $x]);
        return view('Admin');
    }
    public function viewprofile2(Request $request)
    {
        $userId = $request->input('userId');
        $users = DB::Select("Select * from users where id = $userId");
        $grades = DB::select("select * from grades where sid = $userId");
        return view('/Profile2', ['users' => $users], ['grades'=>$grades]);
    }
}

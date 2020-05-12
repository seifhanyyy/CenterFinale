<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gradescontroller extends Controller
{
    public function index(){
        $grades = DB::select('select * from grades');
        return view('Grade',['grades'=>$grades]);
        }
}

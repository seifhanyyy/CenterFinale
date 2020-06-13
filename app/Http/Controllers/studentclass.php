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
   

   
    public function viewstudents()
    {

        //$classx=DB::table('classes')->where('id',$id)->get();
        $data = studentandclass::all();
        return view('viewstudents', ['data' => $data]);
    }
  
   
 
    
  
    
   
   
  
}

<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use PDF;

use Illuminate\Support\Facades\DB;
use App\User;

class PdfGenerateController extends Controller
{
   
        public function pdfview(Request $request) {
            $grade = DB::table("grades")->get();
        view()->share('grades',$grade);


      


        return view('profile');
    }
    }


    


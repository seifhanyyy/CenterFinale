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


        if($request->has('download')){
            $pdf = PDF::loadView('pdf.customer');

            return $pdf->download('pdfview.pdf');
        }


        return view('profile');
    }
    }


    


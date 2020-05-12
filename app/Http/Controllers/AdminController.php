<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        if(Auth::user()->type ==1)
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
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function __construct()
    {
       
        $this->middleware('auth');
    
    }
    public function index(Request $request)
    {

        DB::table('users')
        ->where('id', Auth::user()->id)
        ->update(['img' => $request['img']]);
        
        $request->validate([

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  

        $imageName = Auth::user()->name.'.'.$request->img->extension();  

   

        $request->img->move(public_path('DeebKanhena'), $imageName);

        DB::table('users')
        ->where('id', Auth::user()->id)
        ->update(['img' =>$imageName]);
return view('profile');
    }
    public function view()
    {
        return view('profile');
    }



}


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
<<<<<<< HEAD
    public function SetImage(Request $request)
=======
    public function index(Request $request)
>>>>>>> 44e64d72fc863466f6314a4c8091d29f9ccf3234
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
<<<<<<< HEAD
    public function ViewProfileStudent()
    {
        return view('profile');
    }



=======
    public function view()
    {
        return view('profile'); //returns to the profile page
    }

>>>>>>> 44e64d72fc863466f6314a4c8091d29f9ccf3234
}


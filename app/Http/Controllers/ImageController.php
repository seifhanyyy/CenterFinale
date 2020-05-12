<?php

   

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

  

class ImageController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUpload()

    {

        return view('imageUpload');

    }

  

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost(Request $request)

    {

        $request->validate([

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  

        $imageName = time().'.'.$request->img->extension();  

   

        $request->img->move(public_path('imagessss'), $imageName);

   

        return back()

            ->with('success','You have successfully upload image.')

            ->with('img',$imageName);

   

    }

}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }
    public function register(Request $request)
    {
        $role = Auth::user();

        if ($role) {
            $this->validator2($request->all())->validate();
            event(new Registered($user = $this->create2($request->all())));
        } else {
            $this->validator($request->all())->validate();

            event(new Registered($user = $this->create($request->all())));
        }
        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 201)
            : redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'alpha', 'max:10'],
            'LastName' => ['required', 'alpha', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phonenum' => 'required|regex:/(01)[0-9]{9}/',
            'parentnum' => 'required|regex:/(01)[0-9]{9}/',


        ]);
        
    }
    protected function validator2(array $data2)
    {
        return Validator::make($data2, [
            'name' => ['required', 'alpha', 'max:10'],
            'LastName' => ['required', 'alpha', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phonenum' => 'required|regex:/(01)[0-9]{9}/',


        ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastName'=>$data['LastName'],
            'email' => $data['email'],
            'selected'=>$data['selected'],
            'password' => Hash::make($data['password']),
            'parentEmail'=>$data['ParentEmail'],
            'img'=>'default.jpg',
            'Gender'=>$data['gender'],
            'phonenum'=>$data['phonenum'],
            'parentnum'=>$data['parentnum'], 
            
        ]);
        //DB::insert('insert into users (first name, lastName,email,password,Parent email,your phone,parent phone) values (name, LastName,email,password,ParentEmail,phonenum,parentnum)');


   

        
    }
    
    protected function create2(array $data2)
    {
        return User::create([
            'name' => $data2['name'],
            'lastName'=>$data2['LastName'],
            'email' => $data2['email'],
            'password' => Hash::make($data2['password']),
            'img'=>'default.jpg',
            'phonenum'=>$data2['phonenum'],
            'type'=>2,
            'selected'=>NuLL,
            'parentEmail'=>NuLL,
            'Gender'=>NuLL,
            'parentnum'=>NuLL
        ]);
    }
   
}

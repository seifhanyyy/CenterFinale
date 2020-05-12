<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

 
 
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
  
    protected $redirectTo;
    public function redirectTo()
    {
     
            $role = Auth::user()->type; 
      
            switch ($role) {
                case '1':
                        return '/Admin';
                    break;
                case '2':
                        return '/Teacher';
                    break; 
                    case '3':
                        return '/Student';
                    break; 
                default:
                        return '/login'; 
                    break;
            }
        
        }
    }
    



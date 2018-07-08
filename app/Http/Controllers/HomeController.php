<?php

namespace App\Http\Controllers;

use App\Globals\Constant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = '';

        switch(\Auth::user()->accesslevel){

            case Constant::ACCESSLEVEL_ADMIN:
                    echo "admin";
                break;
            case Constant::ACCESSLEVEL_COACHING:
                echo "coach";
                break;
            case Constant::ACCESSLEVEL_SEEDER:
                $url = '/seeder_dashboard';
                break;
            case Constant::ACCESSLEVEL_STUDENT:
                $url = '/student_dashboard';
                break;

            default: // logout;
        }
          return redirect($url);
        //return view('home');
    }
}

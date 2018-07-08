<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeederController extends Controller
{

    function dashboard()
    {
        return view('seeder.dashboard',["activeOption"=>"Home"]);
    }

    function seedQuestions()
    {
        return view('seeder.seedQuestions');
    }


}

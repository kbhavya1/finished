<?php

namespace App\Http\Controllers;

use App\Http\Request\StoreFormValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Question;


class ExamController extends Controller
{
    function index(){

    }

    function startExam(Request $request){
      return view('exam.index',["package"=>$request->package,"set"=>$request->set]);
    }

    function seed(){
      return view('exam.seed');
    }

    function login(){
      return view('exam.login');
    }

    function admin_login(){
      return Redirect::away('http://popxss.000webhostapp.com/project/admin/');
    }

    function dash_redirect(){
      return Redirect::away('http://localhost:8888/project-iit/dashboard/dashboard_home.php');
    }




      public function store(StoreFormValidation $request)
      {

      }


}

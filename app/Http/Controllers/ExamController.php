<?php

namespace App\Http\Controllers;

use App\Http\Request\StoreFormValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Question;


class ExamController extends Controller
{
    function index(){
      return view('exam.index');
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
    function seeder_page()
    {
      return view('exam.seedimport');
    }
    function insertTodb(Request $req)
    {
      $subject = $req->input('subject');
      $quest = $req->input('ques');
      $opt1 = $req->input('op1');
      $opt2 = $req->input('op2');
      $opt3 = $req->input('op3');
      $opt4 = $req->input('op4');
      $opt5 = $req->input('op5');
      $opt6 = $req->input('op6');
      $copt1 = $req->input('iscorrect_op1');
      $copt2 = $req->input('iscorrect_op2');
      $copt3 = $req->input('iscorrect_op3');
      $copt4 = $req->input('iscorrect_op4');
      $copt5 = $req->input('iscorrect_op5');

      $data = array('subject'=>$subject,'ques'=>$quest,'op1'=>$opt1,'op2'=>$opt2,'op3'=>$opt3,'op4'=>$opt4,'op5'=>$opt5,'op6'=>$opt6,'iscorrect_op1'=>$copt1,'iscorrect_op2'=>$copt2,'iscorrect_op3'=>$copt3,'iscorrect_op4'=>$copt4,'iscorrect_op5'=>$copt5);
      //dd($data);
      \DB::table('questions')->insert($data);

      //echo "Success";

      $display = new Question();
      $displayed = $display->get()->toArray();

      dd($displayed);
    }


      public function store(StoreFormValidation $request)
      {

      }

  /*  public function store(request $request)
    {
      this->validate($request,[
        'username'=>'required:max:20',
        'password'=>'required"max:35',
      ]);
    }*

  /*  public funtion parseImport(CsvImportRequest $request)
    {
      $path = $request->file('csv_file')->getRealPath();

      if($request->has('header')){
        $data = Excel::load($path,function($reader) {})->get()->toArray();
      }
      else{
        $data = array_map('str_getcsv',file($path));
      }

      if(count($data) > 0){
        if($request->has('header')){
          $csv_header_field = [];
          foreach($data[0] as $key => $value){
            $csv_header_field[] = $key;
          }
        }
        $csv_data = array_slice($data,0,2);

        $csv_data_file = Seed::create([
          $csv_filename => $request->file('csv_file')->getClientOriginalName(),
          $csv_header => $request->has('header'),
          $csv_data => json_encode($data),
        ]);
      }else{
        return redirect()->back();
      }

      return view('import_field',compact('csv_header_field', 'csv_data', 'csv_data_file'));
    }*/
}

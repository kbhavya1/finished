<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quesset;
use App\Question;
use Illuminate\Support\Facades\Input;

class QuestionSetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $actionCtrl=['url'=>'questionset', 'method'=>'post'];
        return view("questionset.addeditupdate",['actionCtrl'=> $actionCtrl]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quesset= new Quesset();
        $quesset->package=Input::get('package');
            $quesset->set=Input::get('set');
                $quesset->question_id=Input::get('question_id');
                    $quesset->save();


        /*--------------------------------------------------------------------------*/


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $fetch = Question::all();
        //dd($fetch);
        return view('seeder.editques',["data" => $fetch]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $quesset=Quesset::where("id",$id)->first();
        $actionCtrl=array('route' => array('questionset.update', $quesset->id),'method'=>'put');
        return view("questionset.addeditupdate",['quesset'=>$quesset,'actionCtrl'=> $actionCtrl]);

    }

    /**
     * Edit table for questions
     */
    public function editable($id)
    {
        $question=Question::where("id",$id)->first();
        $actionCtrl=array('url' => array('/questionset/updateques', $question->id),'method'=>'get');
        return view("Questions.update",['question'=>$question,'actionCtrl'=> $actionCtrl]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $quesset=Quesset::findOrFail($id);
        $quesset->package=$request->get('package');
        $quesset->set=$request->get('set');
        $quesset->question_id=$request->get('question_id');
        $quesset->update(['*']);
    }

    /**
     * Update question
     */
    public function updateques($id)
    {
        $question=Question::findOrFail($id);

        try {
            $question->subject = Input::get('subject');
            $question->ques = Input::get('ques');
            $question->op1 = Input::get('op1');
            $question->op2 = Input::get('op2');
            $question->op3 = Input::get('op3');
            $question->op4 = Input::get('op4');
            $question->op5 = Input::get('op5');
            $question->op6 = Input::get('op6');
            $question->iscorrect_op1 = Input::get('iscorrect_op1');
            $question->iscorrect_op2 = Input::get('iscorrect_op2');
            $question->iscorrect_op3 = Input::get('iscorrect_op3');
            $question->iscorrect_op4 = Input::get('iscorrect_op4');
            $question->iscorrect_op5 = Input::get('iscorrect_op5');
            $question->iscorrect_op6 = Input::get('iscorrect_op6');
        }catch(\Exception $e){
            dd(["Unable to proceed",$e]);
        }

        if($question->update(['*'])){
            echo "return flash message";
        }else{
            echo "return flash message with error";
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

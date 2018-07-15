<?php

namespace App\Http\Controllers;

use App\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Globals\Constant;
use App\Question;
use App\Quesset;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class QuestionsController extends Controller
{

    private $maxOption = 6;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Input::get('package');
        $set = Input::get('set');


        /* Validate Exam - Start*/
        $subscription = Subscription::where([["user_id", '=', \Auth::user()->id], ["package_name", '=', $package], ['set', "=", $set]])
            ->get();

        if (count($subscription) == 1) {
            $Examcarbon = new Carbon($subscription[0]->created_at);
            if (!$Examcarbon->isToday()) {
                return json_encode(["ques"=>[],"time"=>0]);
            }
            Session::put('startExam', ["subscription_id" => $subscription[0]->id, "time" => new Carbon()]);
        }
        /* Validate Exam - End*/

        $sessionData = Session::get("startExam");

        $time = 3 * 60 * 60;

        if (isset($sessionData['time'])) {
            $currentCarbon = new Carbon();
            $time = $time - $sessionData['time']->diffInSeconds($currentCarbon);
        }

        if($time<0){
          $time=0;
        }

        $ques = \DB::table('quessets')
            ->select('questions.id', 'questions.subject', 'questions.ques', 'questions.istxt_ques', 'questions.op1', 'questions.istxt_op1', 'questions.op2', 'questions.istxt_op2', 'questions.op3', 'questions.istxt_op3', 'questions.op4', 'questions.istxt_op4', 'questions.op5', 'questions.istxt_op5', 'questions.op6', 'questions.istxt_op6')
            ->join('questions', 'questions.id', '=', 'quessets.question_id')
            ->where("package", $package)
            ->where("set", $set)
            ->get()
            ->toArray();

        $time=(int)($time/60).":".($time%60);
        $response=array("ques"=>$ques,"time"=>$time);

        return json_encode($response);
    }

    public function list()
    {
        $question = new Quesset();

        $results = $question->get();

        return view('Questions.list', ["results" => $results]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return false;
        for ($j = 0; $j < 3; $j++) {
            if ($j == 0) {
                $subject = Constant::getSubject()->MATHS;
            } else if ($j == 1) {
                $subject = Constant::getSubject()->PHYSICS;
            } else {
                $subject = Constant::getSubject()->CHEMISTRY;
            }

            for ($i = 1; $i <= 3; $i++) {
                $question = new Question();
                $question->subject = $subject;
                $question->ques = 'This is a question ' . $question->subject . $i;
                $question->op1 = "op1 " . $question->subject . $i;
                $question->op2 = "op2 " . $question->subject . $i;
                $question->op3 = "op3 " . $question->subject . $i;
                $question->op4 = "op4 " . $question->subject . $i;
                $r = rand(1, 4);
                switch ($r) {
                    case 1:
                        $question->iscorrect_op1 = true;
                        break;
                    case 2:
                        $question->iscorrect_op2 = true;
                        break;
                    case 3:
                        $question->iscorrect_op3 = true;
                        break;
                    case 4:
                        $question->iscorrect_op4 = true;
                        break;
                    case 5:
                        $question->iscorrect_op5 = true;
                        break;
                    case 6:
                        $question->iscorrect_op6 = true;
                        break;

                }

                $ques = $question->save();
            }

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $question = new Question();


        $question->subject = $request->input('subject');
        $question->ques = $request->input('ques');
        $question->op1 = $request->input('op1');
        $question->op2 = $request->input('op2');
        $question->op3 = $request->input('op3');
        $question->op4 = $request->input('op4');
        $question->op5 = $request->input('op5');
        $question->op6 = $request->input('op6');
        $question->iscorrect_op1 = $request->input('iscorrect_op1');
        $question->iscorrect_op2 = $request->input('iscorrect_op2');
        $question->iscorrect_op3 = $request->input('iscorrect_op3');
        $question->iscorrect_op4 = $request->input('iscorrect_op4');
        $question->iscorrect_op5 = $request->input('iscorrect_op5');

        if ($question->save()) {
            return redirect()->back()->with('success', 'Question added !!!');

        } else {
            return Redirect::back()->withErrors(['msg', 'Unable to save Question']);

        }




        //echo "Success";

        //$display = new Question();
        //$displayed = $display->get()->toArray();

        // dd($displayed);
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function submitPaper(Request $request)
    {


        $sessionData=Session::get("startExam");




        if((!isset($sessionData['subscription_id']))||(!isset($sessionData['time']))){
            dd("Unable to Submit Paper");
        }

        $currentCarbon = new Carbon();
        $time = $sessionData['time']->diffInSeconds($currentCarbon);

        if($time>((3*60*60)+10)){
            dd("Time Exceed Unable to submit Paper");
        }
        $subscription=Subscription::findOrFail($sessionData['subscription_id']);
//        $subscription->delete();


        $req = $request->toArray();

        $questionIds = (json_decode($req["recordHash"])->data);
        $correctAnswers = Question::select('id', 'subject', 'iscorrect_op1', 'iscorrect_op2', 'iscorrect_op3', 'iscorrect_op4', 'iscorrect_op5', 'iscorrect_op6')
            ->whereIn('id', $questionIds)
            ->get()->toArray();


        // dd($correctAnswers);
        $subject = Constant::getSubject();

        $subjectMarks = [
            $subject->PHYSICS => ["correctCount" => 0, "incorrectCount" => 0, "unattempt" => 0],
            $subject->CHEMISTRY => ["correctCount" => 0, "incorrectCount" => 0, "unattempt" => 0],
            $subject->MATHS => ["correctCount" => 0, "incorrectCount" => 0, "unattempt" => 0]
        ];


        $total=0;

        foreach ($correctAnswers as $correctAns) {

            $myOption = $req["id_" . $correctAns['id']];

            if ($myOption == null) {
                $count = ($subjectMarks[$correctAns['subject']]["unattempt"]);
                $subjectMarks[$correctAns['subject']]["unattempt"] = ++$count;

            } else if (isset($correctAns["iscorrect_" . $myOption]) && ($correctAns["iscorrect_" . $myOption])) {
                $count = ($subjectMarks[$correctAns['subject']]["correctCount"]);
                $subjectMarks[$correctAns['subject']]["correctCount"] = ++$count;
                $total=$total+4;

            } else {
                $count = ($subjectMarks[$correctAns['subject']]["incorrectCount"]);
                $subjectMarks[$correctAns['subject']]["incorrectCount"] = ++$count;
                $total=$total-1;
            }


        }

        return view('exam.submitPaper',["total" => $total,"subjectMarks"=>$subjectMarks,'subject'=>$subject] );

    }
}

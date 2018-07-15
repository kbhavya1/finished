@extends('seeder.layouts.master')

@section('content')

    <div class="header2" style="position:relative;left:-1px;;">
        <div id="headerr">
            <ul class="navbar" style="padding-left:40px;">
                <li>
                    <p>
                    <img src="images/set_ques.png" alt="add question" style="height: 30vh;width: 30vh;">
                    <a class="{{$activeOption=='add_questionset'?"active":''}} btn btn-primary" type="button"  href="{{ url('/questionset/create') }}">
                        <center>Add Question Set</center>
                    </a>
                    </p>
                </li>

                <li>
                    <p>
                        <img src="images/edit_icon.png" alt="edit icon">
                        <a class="{{$activeOption=='add_questionset'?"active":''}} btn btn-primary" type="button"  href="{{ url('/listquestion') }}">
                                  <center>List Questions</center>
                        </a>
                    </p>
                </li>

                <li>
                    <p>
                        <img src="images/addtodb.ico" alt="add question">

                        <a class="btn btn-primary" type="button" href="{{ url('/seedQuestions') }}">

                            <center>Add Question Papers</center>

                    </a>
                    </p>
                    </li>




            </ul>

                <img src="images/edit.jpg" alt="add question">

                <a class="btn btn-primary" type="button" href="{{ url('/show') }}">

                    <center>Edit Questions</center>
            `
        </div>
    </div>

@endsection


@section('footer')
    <div class="footer col-md-12">
        <nav class="nav fixed-bottom footbar"><center>version:1.0</center></nav>
    </div>
@endsection

<button ></button>


<div class="header2" style="position:relative;left:-1px;;">
<img src="art/passport.png" style="float:center;margin-top:25px;">
<div id="headerr">
      <ul class="navbar" style="padding-left:40px;">
        <li><a class="{{$activeOption=='Home'?"active":''}}" href="#"  onclick="window.location.href = 'dashboard_home.php';"><span>Home</span></a</li></br>
        <li><a class="{{$activeOption=='add_question'?"active":''}}"  href="{{ url('/student_dashboard') }}"><span>Add Question Papers</span></a></li>
        <li><a class="{{$activeOption=='add_questionset'?"active":''}}"  href="#" onclick="window.location.href = 'dashboard_pi.php';"><span>Add Question Set</span></a></li>
          </ul>
</div>
</div>

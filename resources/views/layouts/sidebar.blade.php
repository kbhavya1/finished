<div class="header2" style="position:relative;left:-1px;;">
<img src="art/passport.png" style="float:center;margin-top:25px;">
<div id="headerr">
      <ul class="navbar" style="padding-left:40px;">
        <li><a class="{{$activeOption=='Home'?"active":''}}" href="#"  onclick="window.location.href = 'dashboard_home.php';"><span>Home</span></a</li></br>
        <li><a class="{{$activeOption=='QuestionPaper'?"active":''}}"  href="{{ url('/student_dashboard') }}"><span>Question Papers</span></a></li>
        <li><a class="{{$activeOption=='PlanOption'?"active":''}}"  href="#" onclick="window.location.href = 'dashboard_pi.php';"><span>Plan Info</span></a></li>
        <li><a class="{{$activeOption=='AccountDetails'?"active":''}}" href="#" onclick="window.location.href = 'dashboard_ad.php';"><span>Account Details</span></a></li>
      </ul>
</div>
</div>

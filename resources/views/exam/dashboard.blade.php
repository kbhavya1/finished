@extends('layouts.app')

@section('content')
<div class="col-md-10 float-left" style="height:88vh;">
      <div class="col-md-12" style="height:44vh;border-style: double;">
          <center><h1><u>Active Papers</u></h1></center>
          <h3 class="col-md-10">
            @foreach($papers as $paper)
                <ul>
                    <li>   <a>{{ $paper->package_name }}</a>
                <a>{{ $paper->set }}</a>
                <a>{{ $paper->created_at->format('d M Y') }}</a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @if($paper->created_at->istoday())
                    <a href="{{url('/startexam?package='.$paper->package_name.'&set='.$paper->set) }}" type="button"
                       class="btn btn-primary" target="_blank">Start Exam</a>
                    @endif
                    </li>
                </ul>
            @endforeach
          </h3>
      </div>
    <div class="col-md-12" style="height:44vh;border-style: double;"><center><h1><u>Attempted Papers</u></h1></center>
            @foreach($deletedPapers as $dpaper)
               <h3><ul>
                    <li>
                        <span>{{ $dpaper->package_name }}</span>
                        <span> {{ $dpaper->set }}</span>
                        <span> {{ $dpaper->created_at->format('d M Y') }}</span>
                    </li>
                </ul></h3>
        @endforeach
    </div>

</div>

@endsection

@section('footer_bar')
    <div class="footer col-md-12">
    <nav class="nav fixed-bottom footbar"><center>version:1.0</center></nav>
  </div>
@endsection

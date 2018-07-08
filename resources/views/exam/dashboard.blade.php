@extends('layouts.app')

@section('content')

        <div class="col-md-10">

            @foreach($paper as $paper)
                <a>{{ $paper->package_name }}</a>
                <a>{{ $paper->set }}</a>
                <a>{{ $paper->created_at->format('d M Y') }}</a>
                @if($paper->created_at->istoday())
                    <a href="{{url('/startexam?package='.$paper->package_name.'&set='.$paper->set) }}" type="button"
                       class="btn btn-default">Start Exam</a>
                    @endif
            @endforeach
        </div>
@endsection

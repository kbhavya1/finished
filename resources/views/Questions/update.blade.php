@if(isset($question))
    {{ Form::model($question,$actionCtrl) }}
@else
    {{ Form::open($actionCtrl) }}
@endif

<!-- name -->
{{ Form::label('subject', 'subject') }}
{{ Form::text('subject') }}

<!-- email -->
{{ Form::label('ques', 'ques') }}
{{ Form::text('ques') }}

{{ Form::label('op1', 'op1') }}
{{ Form::text('op1') }}

{{ Form::label('op2', 'op2') }}
{{ Form::text('op2') }}

{{ Form::label('op3', 'op3') }}
{{ Form::text('op3') }}

{{ Form::label('op4', 'op4') }}
{{ Form::text('op4') }}

{{ Form::label('op5', 'op5') }}
{{ Form::text('op5') }}

{{ Form::label('op6', 'op6') }}
{{ Form::text('op6') }}

{{ Form::label('iscorrect_op1', 'iscorrect_op1') }}
{{ Form::text('iscorrect_op1') }}

{{ Form::label('iscorrect_op2', 'iscorrect_op2') }}
{{ Form::text('iscorrect_op2') }}

{{ Form::label('iscorrect_op3', 'iscorrect_op3') }}
{{ Form::text('iscorrect_op3') }}

{{ Form::label('iscorrect_op4', 'iscorrect_op4') }}
{{ Form::text('iscorrect_op4') }}

{{ Form::label('iscorrect_op5', 'iscorrect_op5') }}
{{ Form::text('iscorrect_op5') }}

{{ Form::label('iscorrect_op6', 'iscorrect_op6') }}
{{ Form::text('iscorrect_op6') }}

{{ Form::submit('Update Nerd!') }}

{{ Form::close() }}

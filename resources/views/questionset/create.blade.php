{{ Form::open(['url'=>'questionset', 'method'=>'post']) }}

<!-- name -->
{{ Form::label('package', 'package') }}
{{ Form::text('package') }}

<!-- email -->
{{ Form::label('set', 'set') }}
{{ Form::text('set') }}

{{ Form::label('question_id', 'question_id') }}
{{ Form::text('question_id') }}



{{ Form::submit('Update Nerd!') }}

{{ Form::close() }}

@extends('layout.header')

@section('form-content')
  <div class="container">
    <div class="row">
      <div class="col-lg-offset-4 col-lg-4">
        @if (count($errors) > 0)
          @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
          @endforeach
        @endif
        <form action="" method="GET">
          {{ csrf_field() }}
          <div class="form-group">
            Username:
            <input class="form-control" type="text" name="username" placeholder="Username" />
          </div>

          <div class="form-group">
            Password:
            <input class="form-control" type="text" name="password" placeholder="Password" />
          </div>
        </form>
        <div>
           <input class="btn btn-success" type="submit" value="Submit" onclick="getOutput()"  />
        </div>
      </div>
    </div>
  </div>
@endsection

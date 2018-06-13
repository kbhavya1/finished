<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/mystyle.css') !!}
    {!! Html::script('js/function.js')!!}

    <script>
        function getOutput(){
          var output = document.getElementsByName('users');

        for(var i = 0;i<output.length;i++)
              if(output[i].checked)
               {
                 if(output[i].value == 'coaching')
                    location.href = "{{ url('startexam') }}";
                 else if(output[i].value == 'admin' )
                        location.href = "{{ url('adminview') }}";
                        else if(output[i].value == 'student' )
                               location.href = "{{ url('dashboardview') }}";
                               else
                                location.href = "{{ url('seederview') }}";
               }
        }
    </script>

  </head>

  <body>
  <div class="logo-nav">
      <nav class="navbar navbar-light">
      </nav>
    </div>
    <div class="container-nav">
      <nav class="navbar navbar-second">
        <div class="radio-div btn btn-secondary">
          Student:
          <input type="radio" name="users" id="student" value="student"  autocomplete="off"  />
        </div>
        <div class="radio-div btn btn-secondary">
          Coaching:
          <input type="radio" name="users" id="coaching" value="coaching" autocomplete="off"  />
        </div>
        <div class="radio-div btn btn-secondary">
          Administrator:
          <input type="radio" name="users" id="admin" value="admin" autocomplete="off"  />
        </div>
        <div class="radio-div btn btn-secondary">
          Seeder:
          <input type="radio" name="users" id="seeder" value="seeder" autocomplete="off"  />
        </div>
      </nav>
    </div>
<br />
<br />
    @yield('form-content')

  </body>
</html>

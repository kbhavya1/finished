<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <?php echo Html::style('css/bootstrap.min.css'); ?>

    <?php echo Html::style('css/mystyle.css'); ?>

    <?php echo Html::script('js/function.js'); ?>


    <script>
        function getOutput(){
          var output = document.getElementsByName('users');

        for(var i = 0;i<output.length;i++)
              if(output[i].checked)
               {
                 if(output[i].value == 'coaching')
                    location.href = "<?php echo e(url('startexam')); ?>";
                 else if(output[i].value == 'admin' )
                        location.href = "<?php echo e(url('adminview')); ?>";
                        else if(output[i].value == 'student' )
                               location.href = "<?php echo e(url('dashboardview')); ?>";
                               else
                                location.href = "<?php echo e(url('seederview')); ?>";
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
    <?php echo $__env->yieldContent('form-content'); ?>

  </body>
</html>

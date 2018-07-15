<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ContentSeeder</title>
    <?php echo Html::style('css/bootstrap.min.css'); ?>

    <?php echo Html::style('css/mystyle.css'); ?>

  </head>

<body>
<?php echo $__env->make('seeder.layouts.flashmessage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="container">
      <form class="form-horizontal" action="<?php echo e(url("/ques")); ?>" method="post">
        <div class="form-group">
          <?php echo e(csrf_field()); ?>

          <label class="control-label col-sm-2" >Subject:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="subject" placeholder="Enter the subject" name="subject" />
          </div>
          <label class="control-label col-sm-2" >Question:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="questiontxt" placeholder="Enter the question" name="ques" />
          </div>
          <label class="control-label col-sm-2" >Option1:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="option1" placeholder="Enter the option1" name="op1" />
          </div>
          <label class="control-label col-sm-2" >Option2:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="option2" placeholder="Enter the option2" name="op2" />
          </div>
          <label class="control-label col-sm-2" >Option3</label>
          <div class="form-control">
            <input type="text" class="form-control" id="option3" placeholder="Enter the option3" name="op3" />
          </div>
          <label class="control-label col-sm-2" >Option4:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="option4" placeholder="Enter the option4" name="op4" />
          </div>
          <label class="control-label col-sm-2" >Option5:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="option5" placeholder="Enter the option5" name="op5" />
          </div>
          <label class="control-label col-sm-2" >Option6:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="option6" placeholder="Enter the option6" name="op6" />
          </div>
          <label class="control-label col-sm-2" >Correct Option1:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="correctoption1" placeholder="Enter 0 or 1" name="iscorrect_op1" />
          </div>
          <label class="control-label col-sm-2" >Correct Option2:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="correctoption2" placeholder="Enter 0 or 1" name="iscorrect_op2" />
          </div>
          <label class="control-label col-sm-2" >Correct Option3:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="correctoption3" placeholder="Enter 0 or 1" name="iscorrect_op3" />
          </div>
          <label class="control-label col-sm-2" >Correct Option4:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="correctoption4" placeholder="Enter 0 or 1" name="iscorrect_op4" />
          </div>
          <label class="control-label col-sm-2" >Correct Option5:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="correctoption5" placeholder="Enter 0 or 1" name="iscorrect_op5" />
          </div>
          <label class="control-label col-sm-2" >Correct Option6:</label>
          <div class="form-control">
            <input type="text" class="form-control" id="correctoption6" placeholder="Enter 0 or 1" name="iscorrect_op6" />
          </div>
              <input type="submit" class="btn btn-info" value="Submit"  />

        </div>
      </form>


  </div>

</body>
</html>

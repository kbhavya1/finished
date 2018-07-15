<?php echo e(Form::open(['url'=>'questionset', 'method'=>'post'])); ?>


<!-- name -->
<?php echo e(Form::label('package', 'package')); ?>

<?php echo e(Form::text('package')); ?>


<!-- email -->
<?php echo e(Form::label('set', 'set')); ?>

<?php echo e(Form::text('set')); ?>


<?php echo e(Form::label('question_id', 'question_id')); ?>

<?php echo e(Form::text('question_id')); ?>




<?php echo e(Form::submit('Update Nerd!')); ?>


<?php echo e(Form::close()); ?>


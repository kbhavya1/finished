<?php if(isset($question)): ?>
    <?php echo e(Form::model($question,$actionCtrl)); ?>

<?php else: ?>
    <?php echo e(Form::open($actionCtrl)); ?>

<?php endif; ?>

<!-- name -->
<?php echo e(Form::label('subject', 'subject')); ?>

<?php echo e(Form::text('subject')); ?>


<!-- email -->
<?php echo e(Form::label('ques', 'ques')); ?>

<?php echo e(Form::text('ques')); ?>


<?php echo e(Form::label('op1', 'op1')); ?>

<?php echo e(Form::text('op1')); ?>


<?php echo e(Form::label('op2', 'op2')); ?>

<?php echo e(Form::text('op2')); ?>


<?php echo e(Form::label('op3', 'op3')); ?>

<?php echo e(Form::text('op3')); ?>


<?php echo e(Form::label('op4', 'op4')); ?>

<?php echo e(Form::text('op4')); ?>


<?php echo e(Form::label('op5', 'op5')); ?>

<?php echo e(Form::text('op5')); ?>


<?php echo e(Form::label('op6', 'op6')); ?>

<?php echo e(Form::text('op6')); ?>


<?php echo e(Form::label('iscorrect_op1', 'iscorrect_op1')); ?>

<?php echo e(Form::text('iscorrect_op1')); ?>


<?php echo e(Form::label('iscorrect_op2', 'iscorrect_op2')); ?>

<?php echo e(Form::text('iscorrect_op2')); ?>


<?php echo e(Form::label('iscorrect_op3', 'iscorrect_op3')); ?>

<?php echo e(Form::text('iscorrect_op3')); ?>


<?php echo e(Form::label('iscorrect_op4', 'iscorrect_op4')); ?>

<?php echo e(Form::text('iscorrect_op4')); ?>


<?php echo e(Form::label('iscorrect_op5', 'iscorrect_op5')); ?>

<?php echo e(Form::text('iscorrect_op5')); ?>


<?php echo e(Form::label('iscorrect_op6', 'iscorrect_op6')); ?>

<?php echo e(Form::text('iscorrect_op6')); ?>


<?php echo e(Form::submit('Update Nerd!')); ?>


<?php echo e(Form::close()); ?>


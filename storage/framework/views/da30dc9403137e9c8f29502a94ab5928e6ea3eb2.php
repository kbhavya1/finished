<?php $__env->startSection('profile'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="storage/profile_images/<?php echo e($user->profile_image); ?>" style="height: 40vh;width: 40vh;float: left;border-radius: 50%;">
                <h1><?php echo e($user->name); ?>'s Profile</h1>
            </div>

        <?php echo Form::open(['action'=>'ImageController@store','method'=>'POST','enctype'=>'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::file('profile_image')); ?>



            <?php echo Form::token();; ?>


        <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>

        <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
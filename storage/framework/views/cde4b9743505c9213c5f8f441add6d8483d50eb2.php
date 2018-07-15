<?php if(session()->has('success')): ?>
    <h1><?php echo e(session('success')); ?></h1>
<?php endif; ?>
<?php if(session()->has('errors')): ?>
    <h1><?php echo e(session('errors')); ?></h1>
<?php endif; ?>
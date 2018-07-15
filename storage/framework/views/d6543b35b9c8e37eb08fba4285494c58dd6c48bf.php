<?php $__env->startSection('content'); ?>
<div class="col-md-10 float-left" style="height:88vh;">
      <div class="col-md-12" style="height:44vh;border-style: double;">
          <center><h1><u>Active Papers</u></h1></center>
          <h3 class="col-md-10">
            <?php $__currentLoopData = $papers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul>
                    <li>   <a><?php echo e($paper->package_name); ?></a>
                <a><?php echo e($paper->set); ?></a>
                <a><?php echo e($paper->created_at->format('d M Y')); ?></a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php if($paper->created_at->istoday()): ?>
                    <a href="<?php echo e(url('/startexam?package='.$paper->package_name.'&set='.$paper->set)); ?>" type="button"
                       class="btn btn-primary" target="_blank">Start Exam</a>
                    <?php endif; ?>
                    </li>
                </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </h3>
      </div>
    <div class="col-md-12" style="height:44vh;border-style: double;"><center><h1><u>Attempted Papers</u></h1></center>
            <?php $__currentLoopData = $deletedPapers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dpaper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <h3><ul>
                    <li>
                        <span><?php echo e($dpaper->package_name); ?></span>
                        <span> <?php echo e($dpaper->set); ?></span>
                        <span> <?php echo e($dpaper->created_at->format('d M Y')); ?></span>
                    </li>
                </ul></h3>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_bar'); ?>
    <div class="footer col-md-12">
    <nav class="nav fixed-bottom footbar"><center>version:1.0</center></nav>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
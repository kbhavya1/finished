<body>
     <?php if(count($fetch) > 0): ?>
         <?php $__currentLoopData = $fetch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getImg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-md-5">
         <img src="storage/profile_images/<?php echo e($getImg->profile_image); ?>" style="height:40vh;width: 40vh">
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php endif; ?>
</body>
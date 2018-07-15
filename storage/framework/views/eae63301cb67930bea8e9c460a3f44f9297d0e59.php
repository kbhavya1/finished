<?php $__env->startSection('content'); ?>

        <table>
            <tr>
                <th>id</th>
                <th>package</th>
                <th>set</th>
                <th>question_id</th>
            </tr>
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $results): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($results->id); ?> </td>
                <td><?php echo e($results->package); ?></td>
                <td><?php echo e($results->set); ?></td>
                <td><?php echo e($results->question_id); ?></td>
                <td><a href="<?php echo e(url('/questionset/'.$results->id.'/edit')); ?>"><input type="button" value="edit"></a></td>


            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('seeder.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
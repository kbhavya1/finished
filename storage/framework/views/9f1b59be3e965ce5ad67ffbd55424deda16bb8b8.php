
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
        <table>
            <tr>
                <th><strong>id</strong></th>
            <th><strong>Subject</strong></th>
            <th><strong>Question</strong></th>
            <th><strong>Option 1</strong></th>
            <th><strong>Option 2</strong></th>
            <th><strong>Option 3</strong></th>
            <th><strong>Option 4</strong></th>
            <th><strong>Option 5</strong></th>
            <th><strong>Option 6</strong></th>
            <th><strong>Correct Option 1</strong></th>
            <th><strong>Correct Option 2</strong></th>
            <th><strong>Correct Option 3</strong></th>
            <th><strong>Correct Option 4</strong></th>
            <th><strong>Correct Option 5</strong></th>
            <th><strong>Correct Option 6</strong></th>
            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->id); ?></td>
                <td><?php echo e($data->subject); ?></td>
                <td><?php echo e($data->ques); ?></td>
                <td><?php echo e($data->op1); ?></td>
                <td><?php echo e($data->op2); ?></td>
                <td><?php echo e($data->op3); ?></td>
                <td><?php echo e($data->op4); ?></td>
                <td><?php echo e($data->op5); ?></td>
                <td><?php echo e($data->op6); ?></td>
                <td><?php echo e($data->iscorrect_op1); ?></td>
                <td><?php echo e($data->iscorrect_op2); ?></td>
                <td><?php echo e($data->iscorrect_op3); ?></td>
                <td><?php echo e($data->iscorrect_op4); ?></td>
                <td><?php echo e($data->iscorrect_op5); ?></td>
                <td><?php echo e($data->iscorrect_op6); ?></td>
                    <td><a href="<?php echo e(url('/editable/'.$data->id)); ?>"><input type="button" value="edit"></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

</body>
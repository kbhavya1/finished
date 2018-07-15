<body>
        <div>
            <h2>PHYSICS:</h2>
            <h3> correctCount : <?php echo e(($subjectMarks[$subject->PHYSICS]['correctCount'])); ?> </h3>
            <h3> incorrectCount <?php echo e(($subjectMarks[$subject->PHYSICS]['incorrectCount'])); ?> </h3>
            <h3> unattempt <?php echo e(($subjectMarks[$subject->PHYSICS]['unattempt'])); ?> </h3>
        </div>
        <div>
            <h2>CHEMISTRY</h2>
            <h3> correctCount<?php echo e(($subjectMarks[$subject->CHEMISTRY]['correctCount'])); ?> </h3>
            <h3>incorrectCount <?php echo e(($subjectMarks[$subject->CHEMISTRY]['incorrectCount'])); ?> </h3>
            <h3> unattempt<?php echo e(($subjectMarks[$subject->CHEMISTRY]['unattempt'])); ?> </h3>
        </div>
        <div>
            <h2>MATHS:</h2>
            <h3> correctCount<?php echo e(($subjectMarks[$subject->MATHS]['correctCount'])); ?> </h3>
            <h3>incorrectCount <?php echo e(($subjectMarks[$subject->MATHS]['incorrectCount'])); ?> </h3>
            <h3>unattempt <?php echo e(($subjectMarks[$subject->MATHS]['unattempt'])); ?> </h3>
        </div>
        <h2> total Marks obtained : <?php echo e($total); ?></h2>



<?php $__env->startSection('title', 'Student List'); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(BASE_URL); ?>/index.php?action=create" class="btn btn-success">Add New Student</a>
    <br><br>
    
    <?php if(count($students) > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student['id']); ?></td>
                <td><?php echo e($student['name']); ?></td>
                <td><?php echo e($student['email']); ?></td>
                <td><?php echo e($student['course']); ?></td>
                <td>
                    <a href="<?php echo e(BASE_URL); ?>/index.php?action=edit&id=<?php echo e($student['id']); ?>" class="btn">Edit</a>
                    <a href="<?php echo e(BASE_URL); ?>/index.php?action=delete&id=<?php echo e($student['id']); ?>" 
                       class="btn btn-danger" 
                       onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php else: ?>
        <p>No students found.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Workshop8/app/views/students/index.blade.php ENDPATH**/ ?>
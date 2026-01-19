<?php $__env->startSection('title', 'Edit Student'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Edit Student</h2>
    
    <form method="POST" action="<?php echo e(BASE_URL); ?>/index.php?action=update&id=<?php echo e($student['id']); ?>">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo e($student['name']); ?>" required>
        </div>
        
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo e($student['email']); ?>" required>
        </div>
        
        <div class="form-group">
            <label>Course:</label>
            <input type="text" name="course" value="<?php echo e($student['course']); ?>" required>
        </div>
        
        <button type="submit" class="btn">Update</button>
        <a href="<?php echo e(BASE_URL); ?>/index.php?action=index" class="btn">Cancel</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Workshop8/app/views/students/edit.blade.php ENDPATH**/ ?>
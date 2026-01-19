<?php $__env->startSection('title', 'Add Student'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Add New Student</h2>
    
    <form method="POST" action="<?php echo e(BASE_URL); ?>/index.php?action=store">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label>Course:</label>
            <input type="text" name="course" required>
        </div>
        
        <button type="submit" class="btn btn-success">Add Student</button>
        <a href="<?php echo e(BASE_URL); ?>/index.php?action=index" class="btn">Cancel</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Workshop8/app/views/students/create.blade.php ENDPATH**/ ?>
<?php $__env->startSection('page-content'); ?>
<div class="container-fluid">
    People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius
    <p>
        <a href="<?php echo e(route('usertool')); ?>" class="link-primary">Manage User Roles and Permissions</a>
    </p>
    <p>
        <a href="<?php echo e(route('home')); ?>" class="link-dark">Back</a>
    </p>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
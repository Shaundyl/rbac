<?php $__env->startSection('page-title','Main Landing Page'); ?>

<?php $__env->startSection('page-content'); ?>
<div class="container-fluid">
    <h1>Welcome to the Site</h1>
    <br>
    <a href="<?php echo e(route('acctg')); ?>"
        <?php if (! (Auth::user()->hasRole('admin') || Auth::user()->hasRole('bookeeper') || Auth::user()->hasRole('auditor') || Auth::user()->hasRole('audasst'))): ?>
            class="link-dark not-allowed" style=<?php echo '"pointer-events: none; cursor: not-allowed;"'; ?>

        <?php endif; ?>
    >Accounting</a>
    <a href="<?php echo e(route('prod')); ?>"
        <?php if (! (Auth::user()->hasRole('admin') || Auth::user()->hasRole('assembler'))): ?>
            class="link-dark not-allowed" style=<?php echo '"pointer-events: none; cursor: not-allowed;"'; ?>

        <?php endif; ?>
    >Production</a>
    <?php if(Auth::user()->hasRole('admin')): ?>
       <a href="<?php echo e(route('dash')); ?>" >Dashboard</a>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/homepage.blade.php ENDPATH**/ ?>
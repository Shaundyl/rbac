<?php $__env->startSection('page-content'); ?>
<div class="container-fluid">
    Simplicity is the ultimate sophistication. - Leonardo da Vinci
    <p>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create')): ?>
           <a href="<?php echo e(url('acctg/new')); ?>">Add New Ledger Entry</a>
        <?php elseif (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAll')): ?>
           <a href="<?php echo e(url('acctg/view/all')); ?>">View All Ledgers</a>
        <?php endif; ?>
    </p>
    <p>
        <?php echo $__env->make('slugs.homeLink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/acctg/main.blade.php ENDPATH**/ ?>
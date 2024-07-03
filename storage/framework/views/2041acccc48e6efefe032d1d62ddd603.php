<?php $__env->startSection('page-title','Main Landing Page'); ?>

<?php $__env->startSection('page-content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Welcome to the Site</h1>
                    <br>
                    <div class="list-group">
                        <a href="<?php echo e(route('acctg')); ?>" class="list-group-item list-group-item-action <?php if (! (Auth::user()->hasRole('admin') || Auth::user()->hasRole('bookeeper') || Auth::user()->hasRole('auditor') || Auth::user()->hasRole('audasst'))): ?> disabled <?php endif; ?>">Accounting</a>
                        
                        <a href="<?php echo e(route('prod')); ?>" class="list-group-item list-group-item-action <?php if (! (Auth::user()->hasRole('admin') || Auth::user()->hasRole('assembler'))): ?> disabled <?php endif; ?>">Production</a>
                        
                        <?php if(Auth::user()->hasRole('admin')): ?>
                            <a href="<?php echo e(route('dash')); ?>" class="list-group-item list-group-item-action">Dashboard</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/homepage.blade.php ENDPATH**/ ?>
<?php $__env->startSection('page-title','Account Login'); ?>

<?php $__env->startSection('auth-content'); ?>
<div class="container vh-100">
    <div class="row lh-base">
        <div class="col-4"></div>
        <div class="col-4" style="font-size: 1.6rem; background-color: black; color: white;">User Login</div>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <div class="col-4">&nbsp;</div>
        <div class="col-4" style="border: 1px solid grey;">
            <form method="POST" action="<?php echo e(route('login')); ?>" class="form">
                <?php echo csrf_field(); ?>
                <div class="formgroupp">
                    <label class="auth-labels">Username</label>
                    <input type="text" name="name" value="<?php echo e(old('name')); ?>" required class="auth-textbox form-control border border-dark">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="formgroup">
                    <label class="auth-labels">Password</label>
                    <input type="password" name="password" required class="auth-textbox form-control border border-dark">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="text-center">
                   <button type="submit" class="btn btn-md btn-primary">Login</button>
                   <button type="reset" class="btn btn-md btn-danger">Clear</button>
                </div>
                <div class="text-center">
                    Not a user? Register <a href="<?php echo e(route('register')); ?>">Here</a>.
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/auth/login.blade.php ENDPATH**/ ?>
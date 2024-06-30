<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('page-title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <style>
        * {
            font-family: calibri;
            font-size: 1.3rem;
        }

        .auth-labels {
              display:inline-block;
              width: 8em;
        }

        .auth-textbox {
            /* display: inline-block; */
            margin-bottom: .5em;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-end">
                <div class="fs-6">
                    <?php if(Auth::check()): ?>
                       <?php echo e(Auth::user()->userInfo->user_firstname.' '.Auth::user()->userInfo->user_lastname); ?>

                       <span class="fs-6" style="font-weight: bold;">
                       <?php if(Auth::user()->hasRole('admin')): ?>
                          : Admin User
                       <?php else: ?>
                          : User
                       <?php endif; ?>
                       </span>
                       <?php echo $__env->make('slugs.logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                 </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php if(!Auth::check()): ?>
                    <?php echo $__env->yieldContent('auth-content'); ?>
                <?php else: ?>
                    <?php echo $__env->yieldContent('page-content'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/mainLayout.blade.php ENDPATH**/ ?>
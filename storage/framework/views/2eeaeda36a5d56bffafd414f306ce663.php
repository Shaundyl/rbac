<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('page-title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }

        .auth-labels {
            display: inline-block;
            width: 8em;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .auth-textbox {
            margin-bottom: 1rem;
        }

        .content-wrapper {
            padding: 2rem 0;
        }

        .user-info {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .user-role {
            font-weight: 700;
            color: #007bff;
        }
    </style>
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand"> <img src="<?php echo e(asset('storage/images/shaun.jpg')); ?>"  alt="Logo" class="img-fluid" style="max-width: 50px;"> Aspire Studios</a>
            <div class="ml-auto">
                <?php if(Auth::check()): ?>
                    <span class="user-info">
                        <?php echo e(Auth::user()->userInfo->user_firstname.' '.Auth::user()->userInfo->user_lastname); ?>

                        <span class="user-role">
                        <?php if(Auth::user()->hasRole('admin')): ?>
                            Admin User
                        <?php else: ?>
                            User
                        <?php endif; ?>
                        </span>
                    </span>
                    <?php echo $__env->make('slugs.logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container-fluid content-wrapper">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php if(!Auth::check()): ?>
                    <?php echo $__env->yieldContent('auth-content'); ?>
                <?php else: ?>
                    <?php echo $__env->yieldContent('page-content'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/mainLayout.blade.php ENDPATH**/ ?>
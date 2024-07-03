<?php $__env->startSection('page-title', 'Book Entries'); ?>

<?php $__env->startSection('page-content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Book Entries</h2>
                    <table class="table table-striped table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Entry</th>
                                <th>Entry Amount</th>
                                <th>Encoded By</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $allBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($book->id); ?></td>
                                <td><?php echo e($book->entry); ?></td>
                                <td class="text-end"><?php echo e(number_format($book->amount,2)); ?></td>
                                <td><?php echo e($book->user_id); ?></td>
                                <td>
                                    <a href="<?php echo e(route('ledger',$book->id)); ?>" class="btn btn-primary btn-sm">View Details</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <?php echo e($allBooks->links()); ?>

                    </div>
                    <a href="<?php echo e(route('acctg')); ?>" class="btn btn-secondary mt-3">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/acctg/books/viewLedgers.blade.php ENDPATH**/ ?>
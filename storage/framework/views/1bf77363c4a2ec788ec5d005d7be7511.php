<?php $__env->startSection('page-title', 'Ledger Entry Details'); ?>

<?php $__env->startSection('page-content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Ledger Entry Details
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="entryNumber" class="form-label">Entry Number:</label>
                        <input type="text" class="form-control" id="entryNumber" value="<?php echo e($ledger->id); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="entryDetails" class="form-label">Entry Details:</label>
                        <textarea id="entryDetails" class="form-control" rows="5" readonly><?php echo e($ledger->entry); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount:</label>
                        <input type="text" class="form-control" id="amount" value="PHP <?php echo e(number_format($ledger->amount,2)); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="encodedBy" class="form-label">Encoded by:</label>
                        <input type="text" class="form-control" id="encodedBy" value="<?php echo e($encoder->user_firstname.' '.$encoder->user_lastname); ?>" readonly>
                    </div>
                    <a href="<?php echo e(route('ledgers')); ?>" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/acctg/books/viewLedger.blade.php ENDPATH**/ ?>
<?php $__env->startSection('styles'); ?>
<style>
    .form-container {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 50px;
    }
    .form-title {
        color: #333;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .btn-submit {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-submit:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .btn-reset {
        background-color: #6c757d;
        border-color: #6c757d;
    }
    .btn-reset:hover {
        background-color: #545b62;
        border-color: #4e555b;
    }
    .back-link {
        display: inline-block;
        margin-top: 20px;
        color: #007bff;
        text-decoration: none;
    }
    .back-link:hover {
        text-decoration: underline;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="form-container">
                <h2 class="form-title">New Ledger Entry</h2>
                <form action="<?php echo e(route('saveledger')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-4">
                        <label for="entrydetail" class="form-label">Entry Detail:</label>
                        <textarea name="entrydetail" id="entrydetail" rows="5" class="form-control" style="resize:none;" placeholder="Enter the details of the transaction"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="entryamount" class="form-label">Amount:</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" name="entryamount" class="form-control text-end" id="entryamount" placeholder="0.00">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-submit btn-lg">Submit Entry</button>
                        <button type="reset" class="btn btn-reset btn-lg">Clear Form</button>
                    </div>
                </form>
                <div class="text-center">
                    <a href="<?php echo e(route('acctg')); ?>" class="back-link">
                        <i class="fas fa-arrow-left"></i> Back to Accounting
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    // You can add any JavaScript for form validation or dynamic behavior here
    $(document).ready(function() {
        // Example: Format the amount input as currency
        $('#entryamount').on('input', function() {
            var value = $(this).val();
            value = value.replace(/[^\d.]/g, '');
            value = parseFloat(value).toFixed(2);
            if (isNaN(value)) value = '0.00';
            $(this).val(value);
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/acctg/books/newLedger.blade.php ENDPATH**/ ?>
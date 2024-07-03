<form action="<?php echo e(route('logout')); ?>" class="d-inline-block">
    <?php echo csrf_field(); ?>
    <button type="submit" class="btn btn-sm btn-danger" style="--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
        Logout
    </button>
</form>
<?php /**PATH C:\Web\Web3\laravel\Project\rbac\resources\views/slugs/logout.blade.php ENDPATH**/ ?>
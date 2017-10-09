<form action="<?php echo e(route('statuses.store')); ?>" method="post">
    <?php echo $__env->make('shared._errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo e(csrf_field()); ?>

    <textarea name="content" rows="3" class="form-control" placeholder="聊聊新鲜事儿..."><?php echo e(old('content')); ?></textarea>
    <button type="submit" class="btn btn-primary pull-right">发布</button>
</form>

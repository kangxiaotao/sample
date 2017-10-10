;
<?php $__env->startSection('title', $title); ?>;

<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
    <h1><?php echo e($title); ?></h1>
    <ul class="users">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <img src="<?php echo e($user->gravatar()); ?>" alt="<?php echo e($user->name); ?>" class="gravatar">
                <a href="<?php echo e(route('users.show', $user->id)); ?>" class="username"><?php echo e($user->name); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php echo $users->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title', '登录'); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>登录</h5>
    </div>
    <div class="panel-body">
      <?php echo $__env->make('shared._errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <form class="" action="<?php echo e(route('login')); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="form-group">
          <label for="email">邮箱：</label>
          <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control">
        </div>

        <div class="form-group">
          <label for="password">密码（<a href="<?php echo e(route('password.request')); ?>">忘记密码</a>）：</label>
          <input type="text" name="password" value="<?php echo e(old('password')); ?>" class="form-control">
        </div>

        <div class="checkbox">
          <label><input type="checkbox" name="remember" value="">记住我</label>
        </div>

        <button type="submit" class="btn btn-primary">登录</button>
      </form>

      <hr>

      <p>还没账号？<a href="<?php echo e(route('signup')); ?>">现在注册！</a></p>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('main_section'); ?>

<body>
<div class="container">
  <div class="main">
<h5>Create a New Post</h5>
  <hr>
  <form action="<?php echo e(url('/create_blog')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <input type="text" class="form-control"  placeholder="title.." name="title">
    </div>
    <div class="form-group">
      <textarea name="comment" class="form-control" placeholder="comment.." rols="30" cols="25" style="height: 168px;"></textarea>
    </div>
    <button type="submit"  name="submit" class="btn btn-primary">Create Post</button>
  </form>
</div>
</div>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\emp\resources\views/frontend/create_blog.blade.php ENDPATH**/ ?>
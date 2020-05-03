<?php $__env->startSection('content'); ?>
  <h1><?php echo e(the_title()); ?></h1>
  <div class="contact_container">
    <img src="<?php echo e($thumbnail); ?>" alt="">
    <div class="infos_container">
      <h2>N'hesitez à me faire un coucou</h2>
      <p>contact@benoitbarberot.fr</p>
    </div>

  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
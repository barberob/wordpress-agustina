<?php $__env->startSection('content'); ?>
  <h1><?php echo e(the_title()); ?></h1>
  <div class="contact_container">
    <img src="<?php echo e($thumbnail); ?>" alt="">
    <div class="infos_container">
      <h2><?php echo e($main_text); ?></h2>
      <a data-cursor="salut" href="mailto:<?php echo e($mail); ?>" ><p><?php echo e($mail); ?></p> </a>
    </div>

  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
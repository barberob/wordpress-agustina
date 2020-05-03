<?php $__env->startSection('content'); ?>


  <div class="intro_container">
      <div class="thumbnail_container" style="background-image: url('<?php echo e($thumbnail); ?>');"></div>
      <div class="description_container">
        <h2><?php echo e(the_title()); ?></h2>
        <p><?php echo e($introduction); ?></p>
        <a data-cursor="click" href="/projects"><?php echo e($link_to_projects_text); ?></a>
      </div>
  </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
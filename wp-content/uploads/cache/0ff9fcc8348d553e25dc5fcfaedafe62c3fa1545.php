<?php $__env->startSection('content'); ?>

      <?php ($number_of_posts = wp_count_posts('project')); ?>



     <?php $__currentLoopData = $all_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="project">
          <div class="technology">
            <p><?php echo e($post['technology']); ?></p>
            <div class="line"></div>
          </div>

            <img src=" <?php echo e($post['thumbnail']); ?>">
            <div class="right_container">
              <div></div>
              <div class="infos_container">
                <h2 class="title"><?php echo e($post['title']); ?></h2>
                <a href="<?php echo e($post['link']); ?>">
                  <div data-cursor="click" class="button">
                    <div></div>
                    <?php echo $__env->make('partials.arrow-right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <p>Voir le projet</p>
                  </div>
                </a>
              </div>
              <p class="index"><?php echo e($index + 1); ?> / <?php echo e($number_of_posts->publish); ?></p>
            </div>

        </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
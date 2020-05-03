<?php $__env->startSection('content'); ?>

<div class="inner_wrap">
    <div class="project_top">
      <div class="title_container">
        <h1 >
          <?php $__currentLoopData = $split_title; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $letter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="letter_container"><?php echo e($letter); ?></span>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </h1>
      </div>
      <div class="technologies">
        <?php $__currentLoopData = $project_technologies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $technology): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p><?php echo e($technology); ?></p>
          <span class="separator"></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <span class="scroll_indicator">
        <?php echo $__env->make('svg.arrow-down', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </span>
    </div>


  <div class="content_container">
      <img src="<?php echo e($thumbnail); ?>" alt="">
    <div class="description_container">
      <h2>Le projet</h2>
      <p><?php echo e($description); ?></p>
      <a href="<?php echo e($project_link); ?>" data-cursor="click" target="_blank"> Voir le site </a>
    </div>
  </div>


  <div class="previous_next_links">

    <?php if($previous_post): ?>
    <a href="<?php echo e($previous_post['link']); ?>">
      <div data-cursor="click" class="link_container previous">
        <div>
          <p class="title"><?php echo e($previous_post['title']); ?></p>
        </div>
        <p>Projet précédent</p>
      </div>
    </a>
    <?php else: ?>
      <a href="/projects">
        <div data-cursor="click" class="link_container all">
          <div></div>
          <p class="all" >Tous les projets</p>
        </div>
      </a>
    <?php endif; ?>


    <?php if($next_post): ?>
      <a href="<?php echo e($next_post['link']); ?>">
        <div data-cursor="click" class="link_container next">
          <div>
            <p class="title"><?php echo e($next_post['title']); ?></p>
          </div>
          <p>Projet suivant</p>
        </div>
      </a>
    <?php else: ?>
      <a href="/projects">
        <div data-cursor="click" class="link_container all">
          <div></div>
          <p class="all" >Tous les projets</p>
        </div>
      </a>
    <?php endif; ?>
  </div>
</div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
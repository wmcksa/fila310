
  
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
   <?php $__currentLoopData = $baners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$baner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
      <img src="<?php echo e(asset("storage/$baner->image")); ?>" class="d-block w-100" alt="...">
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><?php /**PATH /home/u643910891/domains/estaaqdem.com/public_html/resources/views/frontend/slider.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<div class="row">
      <div class="col">
            <div class="pull-left">
                 <h2>show livros</h2>
           </div>
     </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <strong>Id</strong>
      <?php echo e($post->id); ?>

    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="form-group">
      <strong>Title:</strong>
      <?php echo e($post->title); ?>

    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="form-group">
      <strong>body</strong>
      <?php echo e($post->body); ?>

    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <strong>Updated</strong>
      <?php echo e($post->updated_at); ?>

    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <strong>created</strong>
      <?php echo e($post->created_at); ?>

    </div>
  </div>
</div>














<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunoifpe/Documentos/livro/resources/views/posts/show.blade.php ENDPATH**/ ?>
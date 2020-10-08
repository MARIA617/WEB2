<?php $__env->startSection('content'); ?>

<div class="row">
      <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                 <h2>adicionar livros</h2>
           </div>
     </div>
</div>

<form action="<?php echo e(route('posts.store')); ?>" method="POST">

<?php echo csrf_field(); ?>
<div class="col">
  <div class="col">
    <div class="form-group">
      <strong>Title: </strong>
      <input type="text" name="title" class="form-control"/>
    </div>
  </div>
</div>

<div class="col">
  <div class="col">
    <div class="form-group">
      <strong>Body: </strong>
       <textarea  class="form-control" name="body"></textarea>
    </div>
  </div>
</div>

<div class="row">
  <div class="col text-center">
    <button type="submit" class="btn col btn-primary">Cadastrar</button>
  </div>
</div>


</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunoifpe/Documentos/livro/resources/views/posts/create.blade.php ENDPATH**/ ?>
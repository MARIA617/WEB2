<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col">
    <div class="pull-left">
      <h2>Edit livro</h2>
    </div>

  </div>
</div>

<form action="<?php echo e(route('posts.update',$post->id)); ?>" method="POST">
	<?php echo csrf_field(); ?>
	@methos('PUT')

	<div class="row">
		<div class="col">
			<div class="form-group">
				<strong>title</strong>
				<input type="text" name="title" class="form-control" value="<?php echo e($post->title); ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="form-group">
				<strong>Body</strong>
				<textarea class="form-control" name="body"><?php echo e($post->body); ?></textarea>
			</div>
		</div>
	</div>

	<div class="col text-center">
		<button type="submit" class="btn btn-primary col">Updade</button>
	</div>


</form>









<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunoifpe/Documentos/livro/resources/views/posts/edit.blade.php ENDPATH**/ ?>
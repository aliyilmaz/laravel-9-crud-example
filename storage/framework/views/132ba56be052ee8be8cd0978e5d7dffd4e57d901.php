<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <h2>Laravel 9 CRUD Example</h2>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-4">
                    <a class="btn btn-primary" href="<?php echo e(route('posts.create')); ?>"> + Create New Post</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">

            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success mt-3">
                    <span><?php echo e($message); ?></span>
                </div>
            <?php endif; ?>

            <table class="table table-bordered mt-4">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Body</th>
                    <th width="180px">Action</th>
                </tr>
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->body); ?></td>
                    <td width="30%">
                        <form action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="POST">

                            <a class="btn btn-info btn-sm text-white" href="<?php echo e(route('posts.show',$post->id)); ?>">Show</a>

                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('posts.edit',$post->id)); ?>">Edit</a>

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('post.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/clickianurgul/Desktop/laravel-9-crud-example/resources/views/post/index.blade.php ENDPATH**/ ?>
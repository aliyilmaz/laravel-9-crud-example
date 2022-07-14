<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-start mt-5">
                    <h2>Add New Post</h2>
                </div>
            </div>
            <div class="col-md-12 text-end mt-4">
                <a class="btn btn-primary" href="<?php echo e(route('posts.index')); ?>">< Back</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('posts.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <br>
                        <div class="form-group">
                            <strong>Body:</strong>
                            <textarea class="form-control" style="height:150px" name="body" placeholder="Body"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('post.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/clickianurgul/Desktop/laravel-9-crud-example/resources/views/post/create.blade.php ENDPATH**/ ?>
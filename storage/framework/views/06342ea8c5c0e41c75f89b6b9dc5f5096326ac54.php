<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5">
                        <h2> Show Post</h2>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-4">
                    <a class="btn btn-primary" href="<?php echo e(route('posts.index')); ?>">< Back</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 margin-tb">
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
                <tr>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->body); ?></td>
                </tr>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('post.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/example-app/resources/views/post/show.blade.php ENDPATH**/ ?>
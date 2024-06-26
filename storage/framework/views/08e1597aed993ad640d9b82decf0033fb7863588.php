<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h2 class="alert alert-primary text-center mt-3 w-50 m-auto"><?php echo e(__('language.CATEGORIES')); ?></h2>
    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4><?php echo e(__('language.CATEGORIES')); ?> <span class="badge badge-danger"><?php echo e($ahmed->count()); ?></span>
                        </h4>
                        <a href="<?php echo e(route('category.create')); ?>" class="btn btn-success"><?php echo e(__( 'language.ADD_NEW_CATEGORY')); ?></a>
                    </div>
                    
                    
                    <table class="table table-dark">
                        <?php if($ahmed->count() > 0): ?>
                            <thead class="text-center">
                                <tr>
                                    <th scope="col"><?php echo e(__('language.IMAGE')); ?></th>
                                    <th scope="col">ID</th>
                                    <th scope="col"><?php echo e(__('language.TITLE')); ?></th>
                                    <th scope="col"><?php echo e(__('language.DESCRIPTION')); ?></th>
                                    <th scope="col"><?php echo e(__('language.PARENT')); ?></th>
                                    <th scope="col"><?php echo e(__('language.CREATED')); ?></th>
                                    <th scope="col"><?php echo e(__('language.OPERATION')); ?></th>


                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $__currentLoopData = $ahmed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row">
                                            <img style="width: 90px;padding-top: 1%;"
                                                src="<?php echo e(asset('categories/image/' . $x->cate_image)); ?>" alt="no img">
                                        </th>
                                        <th scope="row" style="padding-top: 5%"><?php echo e($x->id); ?></th>
                                        <td scope="row" style="padding-top: 5%"><?php echo e($x->title); ?></td>
                                        <td scope="col" style="padding-top: 5%"><?php echo e($x->description); ?></td>
                                        <td scope="row" style="padding-top: 5%"><?php echo e($x->parent_id); ?></td>
                                        <td scope="row" style="padding-top: 5%"><?php echo e($x->created_at); ?></td>
                                        <td scope="row" style="padding-top: 4%">
                                            <a href="<?php echo e(route('category.show', $x->id)); ?>" class="btn btn-success mb-1">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="<?php echo e(route('category.edit', $x->id)); ?>" class="btn btn-warning mb-1">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="<?php echo e(route('category.delete', $x->id)); ?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <h2 class="alert alert-info text-center m-3 mx-auto w-75"> <?php echo e(__('language.NODATA')); ?></h2>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\project\resources\views/Category.blade.php ENDPATH**/ ?>
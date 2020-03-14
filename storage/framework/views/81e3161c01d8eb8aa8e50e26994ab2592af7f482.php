 

<?php $__env->startSection('content'); ?>
	
	<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create ticket</h1>

          </div>
           <!-- Content Row -->
          <section class="content">
            <div class="container-fluid">
              <form action="<?php echo e(url('user/ticket-submit')); ?>" method="POST">
              <?php echo csrf_field(); ?>
            <div class="form-group">

              
              <label for="exampleFormControlInput1"><strong>Subject</strong></label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="subject" placeholder="Subject">
            
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1"><strong>Description</strong></label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                <label for="priority_id"><strong>Priority</strong></label>
                <select name="priority_id" id="priority_id" class="form-control">
                          <option selected>Choose...</option>
                          <?php $__currentLoopData = $priority; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($prio->priority_id); ?>"><?php echo e($prio->priority); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                          </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                <label for="category_id"><strong>Category</strong></label>
                <select multiple="multiple" name="category_id[]" id="category_id" class="form-control js-example-basic-multiple">
                          <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($cat->category_id); ?>"><?php echo e($cat->category_name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </select>
                </div>
              </div>
            </div>
            
            <button type="submit" class="btn btn-primary ">Submit</button>
            </form>      

            </div>
          </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-sekido\resources\views/user.blade.php ENDPATH**/ ?>
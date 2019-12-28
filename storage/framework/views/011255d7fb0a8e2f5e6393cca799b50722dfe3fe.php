<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage tickets</h1>

          </div>

          <!-- Content Row -->
          <section class="content">
            <div class="container-fluid">
              
              <table class="table table-bordered table-striped">
                <tr>
                  <th>ID</th>
                  <th>Subject</th>
                  <th>Description</th>
                  <th>Priority</th>
                  <th>Status</th>
                  <th>Assign to</th>
                  <th>Actions</th>
                </tr>

                     <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <form action="admin" method="post">
                    <tr>
                    <td><div class="form-group"> <input type="text" name="ticket_id" hidden value="<?php echo e($t->ticket_id); ?>" style="border: none;border-color: transparent;"> <?php echo e($t->ticket_id); ?> </div> </td>
                    <td><?php echo e($t->subject); ?></td>
                    <td><?php echo e($t->description); ?></td>
                    <td><?php echo e($t->priority->priority_name); ?></td>
                    <td><?php echo e($t->status->status_name); ?></td>
                    <td><div class="form-group"> 
                      <select name="emplyee_id" id="emplyee_id" class="form-control">
                       <option value=""></option>
                       <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          
                          <option value="<?php echo e($emp->id); ?>"><?php echo e($emp->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                      </select>
                    </div></td>
                    <td><input class="btn btn-primary" type="submit" name="continue"></td>
                  </tr>
                
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              </table>
                
                  <?php echo csrf_field(); ?>
              </form>
                      

            </div>
            



          </section>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\solo\resources\views/admin.blade.php ENDPATH**/ ?>
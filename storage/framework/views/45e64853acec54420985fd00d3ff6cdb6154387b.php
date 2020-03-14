<?php $__env->startSection('content'); ?>
	
	<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 m-2">Assigned Tickets</h1>

          </div>
           <!-- Content Row -->
          <section class="content">
      <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php $__currentLoopData = $ticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tickets): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr id="row<?php echo e($loop->iteration); ?>">
                  <?php echo csrf_field(); ?>
                    <td>
                      <input type="text" name="id" readonly class="form-control-plaintext hidden-ticket"  hidden value="<?php echo e($tickets->ticket_id); ?>"><?php echo e($loop->iteration); ?>

                    </td>
                    <td>
                      <input type="text" name="subject" readonly class="form-control-plaintext"  value="<?php echo e($tickets->subject); ?>">
                    </td>
                    <td>
                      <input type="text" name="description" readonly class="form-control-plaintext"  value="<?php echo e($tickets->description); ?>">
                    </td>
                    <td>
                      <input type="text" name="priority" readonly class="form-control-plaintext <?php if($tickets->priority->priority == 'LESS'): ?>
                                                                                                    text-primary
                                                                                                    <?php elseif($tickets->priority->priority == 'NORMAL'): ?>
                                                                                                    text-warning
                                                                                                    <?php else: ?>
                                                                                                    text-danger
                                                                                                    <?php endif; ?>" value="<?php echo e($tickets->priority->priority); ?>">
                    </td>
                    <td>
                      <input type="text" name="status" readonly class="form-control-plaintext <?php if($tickets->Status->status_name == 'Resolved'): ?>
                                                                                              text-success
                                                                                              <?php else: ?>
                                                                                              text-danger
                                                                                              <?php endif; ?>
                      " value="<?php echo e($tickets->status->status_name); ?>">
                    </td>
                    <td class="actionWidth">                  
                    <?php if($tickets->status->id == 2): ?>
                    <button type="text" class="btn btn-danger statusUpdate" data-toggle="modal" data-target="#statusUpdate" name="status" value="1">Not Resolve</button>
                    <?php else: ?>
                        <button type="text" class="btn btn-success statusUpdate" data-toggle="modal" data-target="#statusUpdate" name="status" value="2">Solve</button>
                    <?php endif; ?>
                    <button type="button" class="viewTicketButton btn btn-warning" >View</button>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                </div>
            </div>
        </div>

        </div>
            <!-- modal -->
            <div class="modal fade" id="statusUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <form action="<?php echo e(url('/submit')); ?>" method="POST">
              <?php echo csrf_field(); ?>
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" value="" name="ticket_id" id="ticket_id">
                      <input type="hidden" value="" name="status_id" id="status_id">

                      Are you sure you want to update the status ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- endmodal -->
          </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.employee_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-sekido\resources\views/employee.blade.php ENDPATH**/ ?>
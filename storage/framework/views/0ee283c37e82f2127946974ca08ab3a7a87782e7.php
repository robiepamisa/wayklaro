<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage tickets</h1>

          </div>

          <!-- Content Row -->

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
                        <th>Assign To</th>
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
                        <th>Assign To</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                          <?php $__currentLoopData = $ticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tickets): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                          <tr  id="row_<?php echo e($loop->iteration); ?>">
                            <td class="rowID">
                              <input type="text" class="custId"  name="ticket_id" hidden value="<?php echo e($tickets->ticket_id); ?>" style="border: none;border-color: transparent;"> <?php echo e($loop->iteration); ?> </div>
                            </td>
                            <td class="rowSub"><?php echo e($tickets->subject); ?></td>
                            <td class="rowDesc"><?php echo e($tickets->description); ?></td>
                            <td class="rowPrio"><?php echo e($tickets->priority->priority); ?></td>
                            <td class="rowStat <?php if($tickets->status->status_name == 'Resolved'): ?>
                                                    text-success
                                                <?php else: ?>
                                                    text-danger
                                                <?php endif; ?>
                              "><?php echo e($tickets->status->status_name); ?></td>
                            <?php if(isset($tickets->assigned->name)): ?>
                            <td class="rowAssign"><a href="<?php echo e(url('profile/')); ?>/<?php echo e($tickets->assign_to); ?>"><?php echo e($tickets->assigned->name); ?></a></td>
                            <?php else: ?>
                              <td class="rowAssign">None</td>  
                            <?php endif; ?>
                            <td class="actionWidth">
                            <?php if(isset($tickets->assigned->name)): ?>
                                <button type="button" class="modalButton btn btn-primary" data-toggle="modal" onclick="" data-target=".bd-example-modal-lg">Edit</button>
                            <?php else: ?>
                                  <button type="button" class="modalButton btn btn-success" data-toggle="modal" onclick="" data-target=".bd-example-modal-lg">Assign</button>
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
            <!-- Modal content -->
                  <!-- Modal -->
                  <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?php echo e(url('admin/saving-credentials')); ?>" method="POST">
                          <?php echo csrf_field(); ?>
                              <table class="table table-bordered table-striped">
                                  <tr>
                                    
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Assign to</th>
                                  </tr>
                                  <tr>
                                  <td class="rowSubModal">
                                  <input type="hidden" id="custId" name="ticket_id" value="">
                                    <input type="text" readonly name="subject" class="form-control-plaintext" id="SubModalId" value="">
                                  </td>
                                  <td class="rowDescModal">
                                      <input type="text" readonly name="description" class="form-control-plaintext" id="DescModalId" value="">
                                  </td>
                                  
                                  <!-- priority -->
                                  <td>
                                    <select class="form-control" name="priority" id="selectPrioId" value="">
                                        <?php $__currentLoopData = $priority; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($prio->priority); ?>"><?php echo e($prio->priority); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                  </td>
                                  <!-- status -->
                                  <td>
                                    <select class="form-control" name="status" id="selectStatId" value="">
                                        <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($stat->status_name); ?>"><?php echo e($stat->status_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                  </td>
                                  <!-- Employee -->
                                  <td>
                                    <select class="form-control" name="assignTo" id="selectEmpId" value="">
                                      <option value="" > Choose Employee</option>
                                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($emp->name); ?>"><?php echo e($emp->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                  </td>
                                  
                                  </tr>
                                </table>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" value="Save changes">Save changes</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
            <!-- end modal content -->
            
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-sekido\resources\views/admin.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage users</h1>
          </div>

          <!-- Content Row -->
          <section class="content">
          	<div class="container-fluid">
          		<p>
          			<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#AdduserModal">Add New User</a>
          		</p>
          		<table class="table table-bordered table-striped">
          			<tr>
          				<th>ID</th>
          				<th>Name</th>
          				<th>Email</th>
          				<th>Actions</th>
          			</tr>

          			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          				<tr>            
          					<td><?php echo e($u->id); ?></td>
          					<td><?php echo e($u->name); ?></td>
          					<td><?php echo e($u->email); ?></td>
                    <td><a href="<?php echo e(route('manage_users.edit',$u->id)); ?>" class="btn btn-info">Edit</a>
                      <a href="#" class="btn btn-danger">Delete User</a>
                    </td>
          				</tr>
          			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          			
          		</table>

          	</div>
          	

        <!-- add new user modal -->

  <div class="modal fade" id="AdduserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new user</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo e(route('manage_users.store')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                           

                            <div class="col-md-11 offset-md-1">
                                <input id="name" placeholder="<?php echo e(__('Name')); ?>" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-11 offset-md-1">
                                <input id="email" placeholder="<?php echo e(__('E-Mail Address')); ?>" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-11 offset-md-1">
                                <input id="password" placeholder="<?php echo e(__('Password')); ?>" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-11 offset-md-1">
                                <input id="password-confirm" placeholder="<?php echo e(__('Confirm Password')); ?>" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row"> 
                        <div class="col-md-7 offset-md-1">
                      <select name="user_role" id="user_role" class="form-control">
                       <option value="">Select role...</option>
                      <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          
                          <option value="<?php echo e($r->role_id); ?>"><?php echo e($r->role); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                      </select>
                    </div>
                    </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-11 offset-md-1">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
       </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>


          </section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-sekido\resources\views/admin/manage_user.blade.php ENDPATH**/ ?>
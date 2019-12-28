<?php $__env->startSection('content'); ?>

<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage users</h1>
          </div>

          <!-- Content Row -->
          <section class="content">
          	<div class="container-fluid">
          		<p>
          			<a class="btn btn-primary" href="#">Add New User</a>
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
          					<td><a href="#" class="btn btn-danger">Delete User</a></td>
          				</tr>
          			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          			
          		</table>

          	</div>
          	



          </section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\solo\resources\views/admin/manage_user.blade.php ENDPATH**/ ?>
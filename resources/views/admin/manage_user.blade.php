@extends('layouts.admin_layout')
@section('content')

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
          			@foreach($users as $user)
          				<tr>
          					<td>{{ $user->id }}</td>
          					<td>{{ $user->name }}</td>
          					<td>{{ $user->email }}</td>
          					<td><a href="#" class="btn btn-danger">Delete User</a></td>
          				</tr>
          			@endforeach
          			
          		</table>

          	</div>
          	



          </section>



@endsection
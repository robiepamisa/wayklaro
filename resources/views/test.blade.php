@extends('layouts.admin_layout')

@section('content')
<!-- Begin Page Content -->
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
            
            </tbody>
        </table>
        </div>
    </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
@extends('layouts.admin_layout')

@section('content')
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

                     @foreach($tickets as $t)
                 <form action="admin" method="post">
                    <tr>
                    <td><div class="form-group"> <input type="text" name="ticket_id" hidden value="{{ $t->ticket_id}}" style="border: none;border-color: transparent;"> {{ $t->ticket_id}} </div> </td>
                    <td>{{ $t->subject}}</td>
                    <td>{{ $t->description}}</td>
                    <td>{{ $t->priority_id}}</td>
                    <td>{{ $t->status->status_name }}</td>
                    <td><div class="form-group">
                      <select name="emplyee_id" id="emplyee_id" class="form-control">
                       <option value=""></option>
                       @foreach ($employees as $emp)
                          
                          <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                        @endforeach 
                      </select>
                    </div></td>
                    <td><input class="btn btn-primary" type="submit" name="continue"></td>
                  </tr>
                
                  @endforeach
                
              </table>
                
                  @csrf
              </form>
                      

            </div>
            



          </section>
    
@endsection

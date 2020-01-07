@extends('layouts.employee_layout')

@section('content')
	
	<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Assigned Tickets</h1>

          </div>
           <!-- Content Row -->
          <section class="content">
            <div class="container-fluid">
              
            <table class="table table-bordered table-striped " id="table_row_id">
                <tr>
                  <th>ID</th>
                  <th>Subject</th>
                  <th>Description</th>
                  <th>Priority</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                  @foreach($tickets as $tickets)
                  <tr id="row{{$loop->iteration}}">
                  <form action="{{url('employee/submit')}}" method="POST">
                  @csrf
                    <td>
                      <input type="text" name="id" readonly class="form-control-plaintext"  hidden value="{{$tickets->ticket_id}}">{{$loop->iteration}}
                    </td>
                    <td>
                      <input type="text" name="subject" readonly class="form-control-plaintext"  value="{{$tickets->subject}}">
                    </td>
                    <td>
                      <input type="text" name="description" readonly class="form-control-plaintext"  value="{{$tickets->description}}">
                    </td>
                    <td>
                      <input type="text" name="priority" readonly class="form-control-plaintext @if($tickets->priority->priority == 'LESS')
                                                                                                    text-primary
                                                                                                    @elseif($tickets->priority->priority == 'NORMAL')
                                                                                                    text-warning
                                                                                                    @else
                                                                                                    text-danger
                                                                                                    @endif" value="{{$tickets->priority->priority}}">
                    </td>
                    <td>
                      <input type="text" name="status" readonly class="form-control-plaintext @if($tickets->Status->status_name == 'Resolved')
                                                                                              text-success
                                                                                              @else
                                                                                              text-danger
                                                                                              @endif
                      " value="{{$tickets->status->status_name}}">
                    </td>
                  
                    @if($tickets->status->id == 2)
                    <td>
                    <button type="submit" class="btn btn-warning" name="status" value="1">Not Resolve</button>
                      </form>
                    </td>
                    @else
                    <td>
                      
                        <button type="submit" class="btn btn-success" name="status" value="2">Solve</button>
                      </form>
                    </td>
                    @endif




                  </tr>
                  @endforeach
              </table>
                      

            </div>
          </section>

@endsection
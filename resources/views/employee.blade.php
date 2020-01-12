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
                  @csrf
                    <td>
                      <input type="text" name="id" readonly class="form-control-plaintext hidden-ticket"  hidden value="{{$tickets->ticket_id}}">{{$loop->iteration}}
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
                    <td>                  
                    @if($tickets->status->id == 2)
                    <button type="text" class="btn btn-danger statusUpdate" data-toggle="modal" data-target="#statusUpdate" name="status" value="1">Not Resolve</button>
                    @else
                        <button type="text" class="btn btn-success statusUpdate" data-toggle="modal" data-target="#statusUpdate" name="status" value="2">Solve</button>
                    @endif
                    <button type="button" class="viewTicketButton btn btn-warning" >View</button>
                    </td>





                  </tr>
                  @endforeach
              </table>
                      

            </div>
            <!-- modal -->
            <div class="modal fade" id="statusUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <form action="{{url('/submit')}}" method="POST">
              @csrf
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

@endsection
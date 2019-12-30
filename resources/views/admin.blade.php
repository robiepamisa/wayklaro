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
                

                     @foreach($ticket as $tickets)
                
                    <tr id="row_{{$loop->iteration}}">
                     
                    <td><div class="rowId form-group"> <input type="text" name="ticket_id" hidden value="{{ $loop->iteration}}" style="border: none;border-color: transparent;"> {{ $loop->iteration}} </div> </td>
                    <td class="rowSub">{{ $tickets->subject}}</td>
                    <td class="rowDesc">{{ $tickets->description}}</td>
                    <td class="rowPrio">{{ $tickets->priority->priority}}</td>
                    <td class="rowStat">{{ $tickets->status->status_name }}</td>
                    <td class="rowAssign">
                    
                    @if(isset($tickets->assigned->name))
                    {{$tickets->assigned->name}}</td>
                    <td><button type="button" class="modalButton btn btn-primary" data-toggle="modal" onclick="" data-target=".bd-example-modal-lg">Edit</button></td>
                    
                    
                    @else
                    None
                    </td>
                    
                    <td>
                        <button type="button" class="modalButton btn btn-primary" data-toggle="modal" onclick="" data-target=".bd-example-modal-lg">Assign</button>
                    </td>
                     
                      
                  </tr>
                           
                  @endif
                
                  @endforeach
                
              </table>
                
                  @csrf
              
                      

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
                              <table class="table table-bordered table-striped">
                                  <tr>
                                    
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Assign to</th>
                                  </tr>
                                  <tr>
                                  <td class="rowSubModal"></td>
                                  <td class="rowDescModal"></td>
                                  <td class="rowPrioModal"></td>
                                  <td class="rowStatModal"></td>
                                  <td class="rowAssignModal"></td>
                                  
                                  </tr>
                                </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
            <!-- end modal content -->
            



          </section>
    
@endsection

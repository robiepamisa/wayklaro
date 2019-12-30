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
                
                    <tr>
                     
                    <td><div class="form-group"> <input type="text" name="ticket_id" hidden value="{{ $loop->iteration}}" style="border: none;border-color: transparent;"> {{ $loop->iteration}} </div> </td>
                    <td>{{ $tickets->subject}}</td>
                    <td>{{ $tickets->description}}</td>
                    <td>{{ $tickets->priority->priority}}</td>
                    <td>{{ $tickets->status->status_name }}</td>
                    <td>
                    
                    @if(isset($tickets->assigned->name))
                    {{$tickets->assigned->name}}</td>
                    <td><button class="btn btn-primary" >Edit</button></td>
                    
                    
                    @else
                    <div class="form-group"> 
                      <select name="emplyee_id" class="form-control select-id-form">
                      <option value="">select</option>
                       @isset($employees)
                       @foreach ($employees as $emp)
                          
                          <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                       
                      </select>
                      
                    </div></td>
                    @endforeach
                    <td><button class="btn btn-primary" onclick="window.location.href = '{{url('/admin?id'.'='.$tickets->ticket_id.'&'.'eid'.'='.$emp->id)}}';">Click Here</button></td>
                     
                      @endisset
                  </tr>
                           
                  @endif
                
                  @endforeach
                
              </table>
                
                  @csrf
              
                      

            </div>
            



          </section>
    
@endsection

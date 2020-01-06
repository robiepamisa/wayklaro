@extends('layouts.user_layout')

@section('content')
<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Tickets</h1>

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
                </tr>
                @if(isset($data))

                @foreach($data as $data)
                <tr>
                    
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->subject}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$priority[$data->priority_id-1]->priority}}</td>
                    <td>{{$data->status->status_name}}</td>
                    <td>{{$data->status->status_name}}</td>
                     
                @endforeach
                @endif

                     
                
              </table>
                
                  @csrf
              </form>
                      

            </div>
            



          </section>
    
@endsection

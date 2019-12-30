@extends('layouts.user_layout')

@section('content')
	
	<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create ticket</h1>

          </div>
           <!-- Content Row -->
          <section class="content">
            <div class="container-fluid">
              <form action="{{url('user/ticket-submit')}}" method="POST">
              @csrf
            <div class="form-group">

              
              <label for="exampleFormControlInput1">Subject</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="subject" placeholder="Subject">
            
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            
            </div>
            <div class="form-group">
            <select name="priority_id" id="priority_id" class="form-control">
                      
                       @foreach ($priority as $prio)
                          
                          <option value="{{ $prio->priority_id }}">{{ $prio->priority }}</option>
                        @endforeach 
                      </select>
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
            </form>      

            </div>
          </section>

@endsection
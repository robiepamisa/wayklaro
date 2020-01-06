@extends($view)
@section('content')

        
<section>
        <div class="container-fluid">
        <div class="align-items-center">
            <h1
                class="h1 text-uppercase text-gray-800">{{$ticket->subject}}
            </h1>
        </div>
        <div>{{$ticket->created_at}}</div>
            <div class="row">
                <div class="col-8 display-4">
                <strong>{{$ticket->description}}</strong>
                </div>
                
                <div>
                asdasd
                </div>
            </div>
        </div>
</section>
@endsection

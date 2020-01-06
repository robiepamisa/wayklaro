@extends($view)
@section('content')

        
<section>
        <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-0">
            <h1
                class="h1 mb-8 text-gray-800 grid">{{$ticket->subject}}
            </h1>
        </div>
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

@extends($layout)

@section('content')

<section>

<div class="container">
<div class="row" style="width:100%">
    <div class="col-xl-12 text-align-center">
        <div class="card">
            <div class="card-body">
            <div class="text-center">
                <h3>Profile</h3>
            </div>
            <div class="text-right">Total Assigned Tickets
                <div><h4>0</h4></div>
            </div>
                <div class="row">
                    <div class="col-md-3 m-3">Name: <a href="">{{$user['name']}}</a></div>

                </div>
                <div class="row">
                    <div class="col-md-3 m-3">Email: <a href=""> {{$user['email']}}</a></div>
                </div>
                <div class="row">
                    <div class="col-md-3 m-3">Company Name: <a href="">{{$user['company_name']}}</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</section>

@endsection

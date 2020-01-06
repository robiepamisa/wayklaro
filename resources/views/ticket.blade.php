@if(Auth::User()->user_role == 1)
    {{$type = "layouts.admin_layout",}}
@elseif(Auth::User()->user_role == 2)
    {{$type = "layouts.employee_layout",}}
@elseif(Auth::User()->user_role == 3)
    {{$type = "layouts.user_layout",}}
@endif


@extends()
@section('content')
    asdasdasd
@endsection

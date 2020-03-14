<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/fontawesome.min.css')}}" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/css/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/jquery-ui-datepicker/jquery-ui.min.css')}}" type="text/css" />


    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/templatemo-style.css')}}">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
  @include('layouts.nav.adminNav')
   
    <div class="container mt-5">
      <form action="{{url('admin/search-logs')}}" method="POST">
        <div class="row tm-content-row">
              <div class="col-12 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <h2 class="tm-block-title text-center">Logs</h2>
                    <div class="row">
                    @csrf
                        <div class="form-group mb-3 col-xs-12 col-sm-4">
                            <label for="from_date">From Date
                            </label>
                            <input id="from_date" name="from_date" type="text" class="form-control validate " data-large-mode="true">
                        </div>
                        
                        <div class="form-group mb-3 col-xs-12 col-sm-4 offset-md-4">
                            <label for="to_date">To Date
                            </label>
                            <input id="to_date" name="to_date" type="text" class="form-control validate" data-large-mode="true">
                        </div>
                    </div>
                
                </div>
                <input type="submit" class="btn btn-primary btn-block text-uppercase mb-3" value="Search">
                
              </div>

              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
              <h2 class="tm-block-title text-center">Logs</h2>
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                  <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                      <thead>
                        <tr>
                          <th scope="col">NAME</th>
                          <th scope="col">EMAIL</th>
                          <th scope="col">Log time</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @isset($logs)
                          @foreach($logs as $l)
                            <tr>
                              <td class="tm-product-name">{{$l->user->name}}</td>
                              <td>{{$l->user->email}}</td>
                              <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $l->login_time)->format('M d Y H:i:A') }}</td>  
                              
                            </tr>
                          @endforeach
                        @endisset
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
        </form>
            
        </div>

      
</div>

     
   
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> All rights reserved. 
          
          Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
      </div>
    </footer>

    <script src="{{asset('assets/admin/js/jquery-3.3.1.min.js')}}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/toast.js')}} "></script>
    <script src="{{asset('assets/admin/js/custom.js')}} "></script>
    <script src="{{asset('assets/admin/jquery-ui-datepicker/jquery-ui.min.js')}}"></script>
    <script>
      $(function() {
        $( "#from_date" ).datepicker({
          dateFormat:"yy/mm/dd"
          }).datepicker("setDate",new Date());
        $( "#to_date" ).datepicker({
          dateFormat:"yy/mm/dd"
          }).datepicker("setDate",new Date());

        
      });
    </script>


    <!-- https://getbootstrap.com/ -->
   
  </body>
</html>
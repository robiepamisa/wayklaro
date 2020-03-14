<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accounts - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/fontawesome.min.css')}}" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/templatemo-style.css')}}">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <div class="" id="home">
    @include('layouts.nav.adminNav')

      
        <!-- row -->
        
          <div class="tm-block-col col-12">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <div class="row">
                <div class="col-9">
                  <h2 class="tm-block-title">Edit Account</h2>
                  
                </div>
                <div class="col-3">
                @if (session('error'))
                        <span class="alert alert-danger">
                        {{ session('error') }}
                        </span>
                        @endif
                </div>

                
              </div>
              @foreach($user as $u)
              <form action="{{url('admin/saving-edit-account')}}/{{$u->id}}" class="tm-signup-form row" method="POST">
                @csrf
                
                <div class="form-group col-lg-6">
                  <label for="name">Account Name</label>
                  <input
                    id="name"
                    name="name"
                    type="text"
                    value="{{$u->name}}"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Account Email</label>
                  <input
                    id="email"
                    name="email"
                    type="email"
                    value="{{$u->email}}"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password2">Re-enter Password</label>
                  <input
                    id="password2"
                    name="password2"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="role">Role</label>
                  <select
                      class="custom-select tm-select-accounts"
                      id="role"
                      name="Role"
                    >
                      <option selected value="{{$u->roles->id}}">{{$u->roles->role_name}}</option>
                      @foreach($role as $r)
                      <option value="{{$r->id}}">{{$r->role_name}}</option>
                      @endforeach
                      
                    </select>
                </div>
                @endforeach
                
                <div class="col-12">
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
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
    </div>

    <script src="{{asset('assets/admin/js/jquery-3.3.1.min.js')}}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>

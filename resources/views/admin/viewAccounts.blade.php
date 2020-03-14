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
    <link rel="stylesheet" href="{{asset('assets/admin/css/templatemo-style.css')}} ">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>
  <body id="reportsPage">
    <div class="" id="home">
    @include('layouts.nav.adminNav')
        <!-- row -->
    <div class="container mt-5">
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12  tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                <div class="row">  
                <div class="col-md-9">
                        <a href="{{url('admin/add-account')}}"class="tm-product-delete-link m-2">
                            <i class="far fa-user tm-product-delete-icon"></i>
                        </a>
                  </div>
                  <div class="col-md-3">
                      @if(session('success'))
                        <span class="alert alert-success">
                          {{ session('success') }}
                        </span>
                      @endif
                      @if (session('error'))
                        <span class="alert alert-danger">
                          Error!
                        </span>
                        @endif
                    </div>

                </div>
                    <div class="tm-product-table-container">
                    
                        <table class="table table-hover tm-table-small tm-product-table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Email</th>
                                <th scope="col">User Status</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($user))
                              @foreach($user as $u)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td class="tm-product-name">{{$u->email}}</td>
                                  @if($u->user_status)
                                  <td>Active</td>
                                  @else
                                  <td>Not active</td>

                                  @endif
                                  <td>{{$u->roles->role_name}}</td>
                                  <td>
                                  <a href="{{url('admin/edit-account')}}/{{$u->id}}" class="tm-product-delete-link">
                                      <i class="far fa-edit tm-product-delete-icon"></i>
                                  </a>
                                  <a href="#deleteAccount" data-toggle="modal" data-target="#DeleteAccount" class="deleteAccount tm-product-delete-link">
                                      <input class="hiddenUserID" type="hidden" value="{{$u->id}}">
                                      <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                  </a>
                                  @if($u->user_status)
                                  <a href="#activateAccount" data-toggle="modal" data-target="#activateAccount" class="updateStatus tm-product-delete-link">
                                      <input class="hiddenUserID" type="hidden" value="{{$u->id}}">
                                      <input class="hiddenStatusID" type="hidden" value="0">
                                      <i class="fas fa-times tm-product-delete-icon"></i>
                                  </a>
                                  @else
                                  <a href="#activateAccount" data-toggle="modal" data-target="#activateAccount" class="updateStatus tm-product-delete-link">
                                      <input class="hiddenUserID" type="hidden" value="{{$u->id}}">
                                      <input class="hiddenStatusID" type="hidden" value="1">
                                      <i class="fas fa-check tm-product-delete-icon"></i>
                                  </a>
                                  @endif
                                  </td>
                              </tr>
                              @endforeach
                            @else
                              0 User
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- update status modal -->
    <div class="modal fade " id="activateAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-header ">
      <form action="{{url('admin/update')}}" method="POST">
        <h5 class="modal-title" id="exampleModalLabel">Update status</h5>
       @csrf
      </div>
      <div class="modal-body ">
        Are you sure you want to update ?
      </div>
      <input type="hidden" id="userHiddenId" name="userID" value="">
      <input type="hidden" id="statusHiddenId" name="statusID" value="">

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- endmodal -->

    <!-- delete user modal -->
    <div class="modal fade " id="DeleteAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content ">
          <div class="modal-header ">
          <form action="{{url('admin/delete')}}" method="POST">
            <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
          @csrf
          </div>
          <div class="modal-body ">
            Are you sure you want to delete ?
          </div>
          <input type="hidden" id="deleteProduct" name="userID" value="">

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" class="btn btn-primary">Yes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- endmodal -->

    <!-- add user modal -->
    <div class="modal fade  " id="AddAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
          <div class="modal-header ">
          <form action="{{url('admin/delete')}}" method="POST">
            <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
          @csrf
          </div>
          <div class="modal-body ">
            Are you sure you want to delete ?
          </div>
          <div class="row">
            <div class="col-md-3">
              <input class="form-control" type="text" id="deleteProduct" name="userID" value="">
            </div>  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" class="btn btn-primary">Yes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- endmodal -->
      <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
          </p>
        </div>
      </footer>
    </div>
<script src="{{asset('assets/admin/js/jquery-3.3.1.min.js')}} "></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/custom.js')}} "></script>

    <!-- https://getbootstrap.com/ -->
  </body>
</html>


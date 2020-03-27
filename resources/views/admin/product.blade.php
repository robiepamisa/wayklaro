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
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
          <div class="row">
            <div class="col-md-9">
              <h3 class="tm-block-title"><strong>Products</strong></h3>
            </div>
            <div class="col-md-3">
            <a
              href="{{url('admin/categories')}}"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new category</a>
            </div>

          </div>
            <div class="tm-product-table-container">
            
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($product as $p)
                  <tr>
                    <td class="tm-product-name">{{$p->name}}</td>
                    <td>${{$p->price}}</td>
                    <td>@if($p->category_id == 0)No category @else{{$p->categories->category_name}} @endif</td>
                    <td>{{$p->status}}</td>
                    <td>
                      <a href="{{url('admin/edit-product')}}/{{$p->id}}" class="tm-product-delete-link">
                        <i class="far fa-edit tm-product-delete-icon"></i>
                      </a>
                      <a href="#deleteProduct" data-toggle="modal" data-target="#deleteProduct" class="productDelete tm-product-delete-link m-2">
                          <input class="hiddenPID" type="hidden" name="productID" value="{{$p->id}}">
                          <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  
                  
                  
                </tbody>
              </table>
            </div>
            <!-- table container -->
            
            <a
              href="{{url('admin/add-product')}}"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
            
          </div>
        </div>
        
      </div>
        
      </div>
    </div>
     <!-- delete product modal -->
     <div class="modal fade " id="deleteProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content ">
          <div class="modal-header ">
          <form action="{{url('admin/delete-product')}}" method="POST">
            <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
          @csrf
          </div>
          <div class="modal-body ">
            Are you sure you want to delete ?
          </div>
          <input type="hidden" id="productID" name="productID" value="">

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" class="btn btn-primary">Yes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- endmodal -->
    <!-- toast -->
    <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
    <!-- endtoast -->

    <!-- add category model-->
    <div class="modal fade " id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content ">
          <div class="modal-header ">
          <form action="{{url('admin/addCategory')}}" method="POST">
            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
          @csrf
          </div>
          <div class="modal-body ">
          </div>
          <div class="form-group mx-sm-2 mb-2">
            <input type="text" name="categoryName" class="form-control" id="inputPassword2" placeholder="Category Name">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
   
    <!-- endmodel -->
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



    <!-- https://getbootstrap.com/ -->
   
  </body>
</html>
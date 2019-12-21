<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/register.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0  my-5 " id="p1">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-7 register-bg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="{{url('/register')}}" method="POST">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" class="form-control form-control-user" name="fname" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="lname" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password"  required minlength="8" id="inputPassword" placeholder="Password">
                    <p class="passwordVerification" id="passwordHint">The password must be at least 8 characters long.</p>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="repeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <input id="registerButton" style="display:none;" type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                
                <hr>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="{{url('/login')}}">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
    <script>
    $(document).ready(function()
    {
        $("#repeatPassword").keyup(function()
        {
            if($("#repeatPassword").val() === $("#inputPassword").val())
            {
                
                document.getElementById('registerButton').style.display = "block";
                $("#repeatPassword").addClass("is-valid").removeClass('is-invalid');
                      
            }
            else
            {
                document.getElementById('registerButton').style.display = "none";
                $("#repeatPassword").addClass("is-invalid").removeClass('is-valid');
            }
        
        });
    });
    </script>
</body>
</html>

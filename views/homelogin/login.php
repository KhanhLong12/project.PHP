 
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="public/publicAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="public/publicAdmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
        <?php if (isset($_COOKIE['create'])){ ?>
              <div class="alert alert-success" role="alert">
                  <?php echo $_COOKIE['create'] ?>
              </div>
          <?php } ?>
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <p style="color: red;">
      <?php 
          if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
          }
      ?>
    </p>
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" method="post">
                    <div class="form-group">
                      <input type="text" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    
                      <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <hr>
                    <a href="http://php20.devmind/php20.devmind/project/" style="border-radius: 15px;" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw" ></i>Home
                    </a>

                    <br>
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="?mod=blogger&act=viewcreate">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="public/publicAdmin/vendor/jquery/jquery.min.js"></script>
  <script src="public/publicAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="public/publicAdmin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="public/publicAdmin/js/sb-admin-2.min.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mosaddek">

  <!--favicon icon-->
  <link rel="icon" type="image/png" href="assets/img/favicon.html">

  <title>Login</title>

  <!--web fonts-->
  <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

  <!--bootstrap styles-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!--icon font-->
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
  <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
  <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

  <!--custom scrollbar-->
  <link href="assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

  <!--jquery dropdown-->
  <link href="assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">

  <!--jquery ui-->
  <link href="assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">

  <!--iCheck-->
  <link href="assets/vendor/icheck/skins/all.css" rel="stylesheet">

  <!--custom styles-->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-bg">

  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="login-form">
          <div class="login-header text-center">
            <img class="pr-3" src="https://www.greenarccapital.com/assets/image/logo.png"
              srcset="assets/img/logo-icon@2x.png 2x" alt="">
          </div>
          <div class="login-body">
            <form class="mt-4" action="#">
              <div class="form-group">
                <label class="fs-14">Email</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white"><i class="fa fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="eg. johndoe@gmail.com">
                </div>
              </div>

              <div class="form-group">
                <label class="fs-14">Password</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white"><i class="fa fa-key"></i></span>
                  </div>
                  <input type="password" class="form-control" id="password" placeholder="eg. *******">
                  <div class="input-group-append">
                    <span class="input-group-text bg-white fs-13">Show</span>
                  </div>
                </div>
              </div>

              <div class="form-group clearfix my-4 text-center">
                <button type="submit" class="btn btn-cta btn-login">LOGIN</button>
              </div>
              <hr>
              <!-- <div class="form-divider"></div> -->

              <div class="form-group text-center">
                <span>Not a Customer? <a href="#" class="btn-link-primary text-capitalize">Create New Account</a></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--basic scripts-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
  <script src="assets/vendor/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
  <script src="assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/vendor/icheck/skins/icheck.min.js"></script>

  <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

  <!--basic scripts initialization-->
  <script src="assets/js/scripts.js"></script>
</body>

</html>
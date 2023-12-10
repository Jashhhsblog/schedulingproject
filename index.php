<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - <?php include('dist/includes/title.php');?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
  <!-- Font Awesome -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    .login-page {
      position: relative;
      overflow: hidden;
      height: 100vh; /* Set the container height to full viewport height */
    }

    .login-video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .login-box {
      background: transparent;
      box-shadow: none;
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>



<body class="hold-transition login-page">
  <!-- Login video and box contents go here -->
  <video class="login-video" autoplay loop muted>
    <source src="amrita.mp4" type="video/mp4">
  </video>

  <div class="login-box" id="login-box">
    <div class="login-logo">
      
    </div><!-- /.login-logo -->
    <div class="login-box-body">
    <h1 align="center">FACULTY CALENDAR SCHEDULER</h1>
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="login.php" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-6 pull-right">
            <button type="reset" class="btn btn-block btn-flat">Clear</button>
          </div><!-- /.col -->
          <div class="col-xs-6 pull-right">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
          </div><!-- /.col -->
        </div>
      </form>
      <div class="text-center">
        <p class="mt-20">Forgot your password? <a href="#" id="forgot-password-link">Reset password</a></p>
        </div>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <div class="login-box" id="forgot-password-box" style="display: none;">
    <div class="login-logo">
      
    </div><!-- /.login-logo -->
    <div class="login-box-body">
    <h1 align="center">FACULTY CALENDAR SCHEDULER</h1>
      <p class="login-box-msg">Forgot Password</p>
      <form action="forgot_password.php" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="New Password" name="newPassword">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="forgot-password">Reset Password</button>
          </div><!-- /.col -->
        </div>
      </form>
      <div class="text-center">
        <p class="mt-20">Remembered your password? <a href="#" id="signin-link">Sign in</a></p>
      </div>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- JavaScript code and script references -->
  <!-- jQuery 2.1.4 -->
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <script>
    $(document).ready(function() {
      // Hide forgot password box initially
      $("#forgot-password-box").hide();

      // Handle login link click event
      $("#signin-link").click(function(e) {
        e.preventDefault();
        $("#forgot-password-box").hide();
        $("#login-box").show();
      });

      // Handle forgot password link click event
      $("#forgot-password-link").click(function(e) {
        e.preventDefault();
        $("#login-box").hide();
        $("#forgot-password-box").show();
      });
    });
  </script>






  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>
</html>

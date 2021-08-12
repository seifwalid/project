
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <h1><b>Admin</b>LTE</h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="includes/sign-IN.inc.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="username/Email" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pwd">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
          </div>
          <?php
 if (isset($_GET["error"])) {

   if ($_GET["error"]=="emptyinput") {
     echo "<p> FILL IN ALL FIELDS!!</P>";
   }
   else if ($_GET["error"]=="userNotExist"){
         echo "<p>THIS USER DOESN'T EXIST</P>";
   }
   else  if ($_GET["error"]=="wrongpass") {
          echo "<p>Wrong password </P>";
   }
 
 }
           ?>
          <!-- /.col -->
        </div>
      </form>

    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>

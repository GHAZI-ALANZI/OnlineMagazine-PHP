<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition ">
  <script>
    start_loader()
  </script>
  <style>
    html, body{
      height:calc(100%) !important;
      width:calc(100%) !important;
    }
    body{
      background-image: url("https://images.unsplash.com/photo-1561211919-1947abbbb35b?auto=format&fit=crop&q=80&w=2071&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
      background-size:cover;
      background-repeat:no-repeat;
    }
    .login-title{
      text-shadow: 2px 2px black
    }
  </style>
  <?php if(isMobileDevice()): ?>
    <style>
      #login{
        flex-direction:column !important
      }
      #login .col-7,#login .col-5{
        width: 100% !important;
        max-width:unset !important
      }
    </style>
  <?php endif; ?>
  <div class="h-100 d-flex align-items-center w-100" id="login">
    <div class="col-7 h-100 d-flex align-items-center justify-content-center">
      <div class="w-100">
        <h1 class="text-center h1 py-5 login-title"><b><?php echo $_settings->info('name') ?></b></h1>
        <center><img src="<?= validate_image($_settings->info('logo')) ?>" alt=""></center>
      </div>
      
    </div>
    <div class="col-5 h-100 bg-gradient">
      <div class="d-flex w-100 h-100 justify-content-center align-items-center">
        <div class="card col-md-4 col-lg-8 card-outline card-primary">
          <div class="card-header">
            <h4 class="text-purle text-center"><b>Login</b></h4>
          </div>
          <div class="card-body">
            <form id="login-frm" action="" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" autofocus name="username" placeholder="Username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <a href="<?php echo base_url ?>">Go to Website</a>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <a href="./register.php">Create an Author Account Here</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>
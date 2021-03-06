<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>LOGIN ADMIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo base_url()?>index.php/auth/chek_login" method="post">
               
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="username" class="form-control username" name="username" placeholder="Username"></span>
                    </div>
                    <div class="form-group form-actions">
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Password"></i>
                             </span>
                    </div>
                    <div class="form-actions">
                        
                    <div class="social-auth-links text-center mb-3">
                    <button type="submit" name="submit" class="btn btn-block btn-primary"> 
                    <i class="fas fa-lock"></i> Login
                     </button>
       
                   </div>
                    </div>
                    
                </fieldset>
                </form>

  
    </div>
    
    <!-- /.login-card-body -->
  </div>
  <div class="copyright" align="center">
                2020 &copy; http://heriskurniawan.my.id
            </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/AdminLTE/dist/js/adminlte.min.js"></script>

</body>
</html>

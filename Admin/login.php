
<?php
include("../includes/db.php");
session_start();

if(isset($_POST['admin_login']))
{
 
    $a_email=  mysqli_real_escape_string($con, $_POST['admin_email']);
    $a_password=  mysqli_real_escape_string($con, $_POST['admin_pass']);
  
 
    
 
     
   
 
    $admin_name="1";

    
   $run_admin = mysqli_query($con,"select * from users where 
              username='$a_email' and password='$a_password'");
   
   while($row_slides=mysqli_fetch_array($run_admin))
   {
       $admin_name=$row_slides['username'];
        
       
   }
    
    if($admin_name!="1")
    {
        $_SESSION['admin_email']= $a_email; 
        $_SESSION['admin_name']=$admin_name;
        echo"<script>alert('Logged in. Welcome Back ')</script>";
        echo"<script> window.open('index.php','_self')</script>";
   }else{
        echo"<script>alert('Email or password is wrong  !' )</script>";
        
        
    }
   
    
    

    
 
  
}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a ><b>Admin</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in </p>
        <form method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Email" name="admin_email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="admin_pass"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="admin_login">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
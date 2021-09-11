<?php 
session_start();

if(isset( $_SESSION['user_id']))
{
header('Location:index.php');
}

require_once "../vendor/autoload.php";
$login=new App\classes\Login();
if(isset($_POST['login']))
{
 $loginError= $login->loginCheck($_POST);

}

?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab-4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 15:06:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mofasser">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="" method="POST" id="frmSample">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
          <div>
            <input type="text" name="username" class="form-control" placeholder="username"data-validation="required" autofocus >
          </div>
          <div>
            <input type="password" name="password" class="form-control" placeholder="Password" data-validation="length" data-validation-length="min5" >
          </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href=""> Forgot Password?</a>

                </span>
            </label>
        <button class="btn btn-lg btn-login btn-block" type="submit" name="login" >Login</button>
           <p><?=isset($loginError)? $loginError:''?></p>
           

        </div>

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--validation-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js">   
  </script>
<script>
  $.validate({

});
  </script>


  </body>

</html>

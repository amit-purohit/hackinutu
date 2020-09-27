<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">
    <link type="text/css" href="assets/css/fontawesome.rtl.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">


</head>

<body class="login">

    <form action="" method="post">
        <div class="d-flex align-items-center" style="min-height: 100vh">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 300px;">
                <div class="text-center mt-5 mb-1">
                    <div class="avatar avatar-lg">
                        <img src="assets/images/logo/primary.svg" class="avatar-img rounded-circle" alt="LearnPlus" />
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href="student-dashboard.html" class="navbar-brand m-0">BCAStuffs</a>
                </div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Login</h4>
                        <p class="card-subtitle">Access your account</p>
                    </div>
                    <div class="card-body">

                        <a href="student-dashboard.html" class="btn btn-light btn-block">
                            <span class="fab fa-google mr-2"></span>
                            Continue with Google
                        </a>

                        <div class="page-separator">
                            <div class="page-separator__text">or</div>
                        </div>

                        <form action="" method="post">
                            <div class="form-group">
                                <label class="form-label" for="email">Your email address:</label>
                                <div class="input-group input-group-merge">
                                    <input id="email" name="email" type="email"
                                        class="form-control form-control-prepended" placeholder="Your email address">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Your password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password" name="password" type="password"
                                        class="form-control form-control-prepended" placeholder="Your password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="fa fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="login" id="login" class="btn btn-primary btn-block"
                                    value="Login">
                            </div>
                            <div class="text-center">
                                <a href="forgotpassword.php" class="text-black-70"
                                    style="text-decoration: underline;">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center text-black-50">
                        Not yet a student? <a href="guest-signup.html">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/dom-factory.js"></script>
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>

    <?php
    include "connection.php";

  if(isset($_POST["login"]))
  {

     $email= $_POST['email'];
     $password=$_POST['password'];

     $sql="SELECT * FROM admin_master WHERE admin_email='$email' AND password='$password'";
     echo $sql;
     $result=mysqli_query($con, $sql);
     $count = mysqli_num_rows($result);
     echo $count;
    
     if( $count > 0 )
     { 
         // echo $sql;
      $row=mysqli_fetch_array($result);
      $_SESSION["logged_in_admin"] = true; 
      $_SESSION["adminid"]=$row['admin_id'];
      $_SESSION['email']=$row['admin_email'];

          //echo $_SESSION["userid"];
          ?>
          <script>
          window.open("index.php","_self");
         </script>
      
<?php
        }
          else
           {
                echo "<script>alert('enter valid data');</script>";
            }
        }
   ?>

</body>
<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/guest-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 12:17:37 GMT -->


</html>
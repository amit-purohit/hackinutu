<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signup</title>


    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/material-icons.rtl.css" rel="stylesheet">


    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">
    <link type="text/css" href="assets/css/fontawesome.rtl.css" rel="stylesheet">


    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

</head>

<body>


    <div class="d-flex align-items-center" style="min-height: 100vh">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 300px;">
            <div class="text-center mt-5 mb-1">
                <div class="avatar avatar-lg">
                    <img src="assets/images/logo/primary.svg" class="avatar-img rounded-circle" alt="LearnPlus" />
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5 navbar-light">
                <!-- Brand -->
                <a href="student-dashboard.html" class="navbar-brand m-0">
                 BCAStuffs
             </a>
         </div>
         <div class="card navbar-shadow">
            <div class="card-header text-center">
                <h4 class="card-title">Forgot Password?</h4>
                <p class="card-subtitle">Recover your account password</p>
            </div>
            <div class="card-body">

                <div class="alert alert-light border-1 border-left-3 border-left-primary d-flex" role="alert">
                    <i id="sendicon" class="material-icons text-success mr-3">check_circle</i>
                    <div class="text-body"><p id="messageotp">Password reset successfull.</p></div>
                </div>

                <form action=""  method="POST">
                    <div class="form-group">
                        <label class="form-label" for="otp">Enter new password:</label>
                        <div class="input-group input-group-merge">
                            <input id="repassword" name="repassword" type="text" class="form-control form-control-prepended" placeholder="Enter password">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-key"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="newpassword" id="newpassword" class="btn btn-primary btn-block" value="Reset Password">
                </form>
            </div>
            <div class="card-footer text-center text-black-50">Remember your password? <a href="login.php">Login</a></div>
        </div>
    </div>
</div>
<?php
include "connection.php";
    $email=$_SESSION['email'];
    //echo $email;
    if(isset($_POST['newpassword']))
    {
        $sql="UPDATE user_master SET password='" .$_POST['repassword']. "' WHERE email='$email'";
        $result=mysqli_query($con,$sql);
        // echo $email;
        // echo $sql;
        if($result)
        {
            echo "<script type='text/javascript'>
                     $('#newpassword').click(function(event) {
                        $('#messageotp').show();
                        $('#sendicon').show();
        });
            ";
        }
            
    }
    
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#messageotp").hide();
        $("#sendicon").hide();
    });
</script>


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
</body>
</html>


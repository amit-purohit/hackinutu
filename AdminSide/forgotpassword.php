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

    <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
    <!-- <meta name="robots" content="noindex"> -->

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
                        <div class="text-body"><p id="messageotp">OTP sended.</p></div>
                    </div>

                    <form action=""  method="POST">
                        <div class="form-group">
                            <label class="form-label" for="email">Email address:</label>
                            <div class="input-group input-group-merge">
                                <input id="emailadd" name="emailadd" type="email" class="form-control form-control-prepended" placeholder="Your email address">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="submit" name="sendotp" id="sendotp" class="btn btn-primary btn-block" value="Send OTP">

                        <div class="form-group">
                            <label class="form-label" for="otp">Enter OTP:</label>
                            <div class="input-group input-group-merge">
                                <input id="verifyotp" name="verifyotp" type="text" class="form-control form-control-prepended" placeholder="Enter OTP">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fa fa-key"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <a name="verify" href="resetpassword.php?email=?php error_reporting(1); echo $_POST['emailadd']; ?>" class="btn btn-primary btn-block"> Verify OTP</a> -->
                        <input type="submit" name="verify" id="verify" class="btn btn-primary btn-block" value="Verify OTP">
                    </form>
                </div>
                <div class="card-footer text-center text-black-50">Remember your password? <a href="login.php">Login</a></div>
            </div>
        </div>
    </div>

<?php

include "connection.php";
error_reporting(1);
date_default_timezone_set("Asia/Kolkata");
if(!empty($_POST['sendotp']))
{
        $sql="select * from user_master where email='".$_POST["emailadd"]."'";
             //generate otp
        $res=mysqli_query($con,$sql);
        $count = mysqli_num_rows($res);
         $otp= mt_rand(10000, 99999);

             //send otp
        $to=$_POST['emailadd'];
        $_SESSION['email']=$_POST['emailadd'];
        $subject="registratin otp";
        $text="Your Otp is ".$otp;
        $headers="From:nonreply@gmail.com";

        if(mail($to, $subject, $text,$headers))
        {
            echo"mail send";
            $sql1="INSERT INTO otp_expiry(id,otp,is_expired,created_at) VALUES (NULL,$otp,0,'".DATE("Y-m-d H:i:s")."')";
            echo $sql1;
            $result=mysqli_query($con,$sql1);

        }
        else
        {
            echo "mail not sent";
        } 
}

if(isset($_POST['verify']))
{
    $sql2 = "select * from otp_expiry where otp = " .$_POST["verifyotp"]. " and is_expired != 1 and NOW() <= date_add(created_at,INTERVAL 15 MINUTE)";
    //echo $sql2;
    $result1 = mysqli_query($con,$sql2);
    $count=mysqli_num_rows($result1);
   echo $count;
    if($count >= 1)
    {
        $success=2;
        $result2=mysqli_query($con," UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" .$_POST["verifyotp"]. "' ");

    }
    else
    {
        echo "otp expired or invalid otp";

    }
    if($success == 2)
    {
              echo "<script>window.open('resetpassword.php','_self');</script>";

    }
}



?>

  <script type="text/javascript">
    $(document).ready(function() {
        $("#messageotp").hide();
        $("#sendicon").hide();
        $("#sendotp").click(function(event) {
            $("#messageotp").show();
            $("#sendicon").show();
        });
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



<!-- ?php
  error_reporting(1);
    if(isset($_POST['sendotp']))
  {
            $otp= mt_rand(10000, 99999);
            $to=$_POST['emailadd'];
            $subject="registratin otp";
            $text="Your Otp is ".$otp;
            $headers="From:nonreply@gmail.com";

            $votp=$otp;
            if(mail($to, $subject, $text,$headers))
            {
                echo"mail send";
                echo $_COOKIE['votp'];
            }
            else
            {
                echo "mail not sent";
            }
}

            if(isset($_POST['verify']))
            {

                $votp = $_POST['otp'];

                if($votp == $otp) 
                {
                    echo "Congratulation, registration is successfully done.";
                   echo "<a href='resetpassword.php'></a>";

                }
                 if($_COOKIE['votp'] != $otp) 
                {
                  echo "Please enter correct otp.";
                }

            }
  ?>
 -->
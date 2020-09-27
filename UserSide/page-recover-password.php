<?php
  include "header.php"
?>


   
<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="card shadow-v2"> 
         <div class="card-header px-lg-5 border-bottom">
          <h4 class="mt-4">
            Get Your Password
          </h4>
         </div>         
          <div class="card-body">
            <form action="" method="POST" class="px-lg-5">
             <p class="marginBottom-40">
               Lost your password? Please enter your email address. You will receive a link to create a new password via email.
             </p>
              <div class="input-group input-group--focus marginBottom-40">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-email"></span>
                </div>
                <input type="email" class="form-control border-left-0 pl-0" placeholder="Email" required name="emailadd" id="emailadd">
              </div>
              <!-- <button class="btn btn-block btn-primary mb-5" name="sendotp" id="sendotp">Reset Password</button> -->
              <input type="submit" class="btn btn-block btn-primary mb-5" name="sendotp" id="sendotp" value="Reset Password" />

            </form>
          </div>
        </div>
      </div> 
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
   
   <?php

include "connection.php";
//error_reporting(1);
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
            echo"<script>alert('mail send');</script>";
            $sql1="INSERT INTO otp_expiry(id,otp,is_expired,created_at) VALUES (NULL,$otp,0,'".DATE("Y-m-d H:i:s")."')";
            $result=mysqli_query($con,$sql1);

        }
        else
        {
            echo"<script>alert('mail not send');</script>";
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
   
   
   


<?php include "footer.php" ?>
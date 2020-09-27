<?php 
include "header.php";
?>
<div class="py-5 bg-cover" data-dark-overlay="6" style="background:url(assets/img/1920/658_2.jpg) no-repeat">
  <div class="container">
    <h2 class="text-white">
      Contact
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Page</a></li>
      <li class="breadcrumb-item">Contact</li>
    </ol>
  </div>
</div>



<div class="py-5 shadow-v2 position-relative">
 <div class="container">
   <div class="row">

     <div class="col-lg-4 col-md-6 mt-4">
       <div class="media">
         <span class="iconbox iconbox-md bg-primary text-white"><i class="ti-mobile"></i></span>
         <div class="media-body ml-3">
          <h5 class="mb-0">1-800-643-4500</h5> 
          <p>Call Us (8AM-10PM)</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mt-4">
     <div class="media">
       <span class="iconbox iconbox-md bg-primary text-white"><i class="ti-email"></i></span>
       <div class="media-body ml-3">
        <a href="mailto:support@echotheme.com" class="h5">support@bcastuffs.com</a>
        <p>Call Us (8AM-10PM)</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mt-4">
   <div class="media">
     <span class="iconbox iconbox-md bg-primary text-white"><i class="ti-location-pin"></i></span>
     <div class="media-body ml-3">
      <h5 class="mb-0">New York Avenue, USA</h5> 
      <p>Unit 25 Suite 3, 925 Prospect</p>
    </div>
  </div>
</div>

</div>
</div>
</div>


<form method="post" action="">

<section class="padding-y-100 bg-light-v2">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center mb-5">
      <h2>
        Send Message
      </h2>
      <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
    </div>
    <div class="col-12 text-center">
      <form action="#" method="POST" class="card p-4 p-md-5 shadow-v1">
          <!-- <p class="lead mt-2">
        
          </p> -->
          <div class="row mt-5 mx-0">
            <div class="col-md-4 mb-4">
              <input type="text" name="myname" class="form-control" placeholder="Name" required>
            </div>

            <div class="col-md-4 mb-4">
              <input type="email" name="emailadd" class="form-control" placeholder="Email" required>
            </div>

            <div class="col-md-4 mb-4">
              <input type="number" name="ph" class="form-control" placeholder="Phone number">
            </div>
            <div class="col-12">
              <textarea type="text" name="sms" class="form-control" placeholder="Message" rows="7"></textarea>
              
              <input type="submit" name="sendmail" class="btn btn-primary mt-4" value="Send Message">
            </div>
          </div>
        </form>  
      </div>
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
</form>
<!--  <div class="google-map" data-address="Harvard University" data-zoom="14" data-key="AIzaSyB0uuKeEkPfAo7EUINYPQs3bzXn7AabgJI" style="height:450px;"></div> -->
<?php

include "connection.php";
error_reporting(1);
date_default_timezone_set("Asia/Kolkata");
if(!empty($_POST['sendmail']))
{
  $sql="select * from user_master where email='".$_POST["emailadd"]."'";
             //generate otp
  $res=mysqli_query($con,$sql);
  $result=mysqli_query($con, $sql);
  $count = mysqli_num_rows($result);
  echo $count;

  if( $count > 0 )
  { 
               // echo $sql;
    $row=mysqli_fetch_array($result);
    $user_id=$row['user_id'];
  }



  $count = mysqli_num_rows($res);
  $sms = $_POST['sms'];
  $phone=$_POST['ph'];
  $name=$_POST['myname'];

             //send otp
  $to=$_POST['emailadd'];
  $_SESSION['email']=$_POST['emailadd'];
  $subject="Contact Us Mail";
  $text = "Phone no:.".$phone ;
  $text .= "Name: ".$name ;
  $text .=$sms;
  $headers="From:nonreply@gmail.com";

  if(mail($to, $subject, $text,$headers))
  {
    echo"mail send";

    $sql1 =  "INSERT INTO `feedback_master`(`feedback_id`, `user_id`,  `feedback_text`) VALUES (NULL,$user_id,'$text')";
    //echo $sql1;
    $result=mysqli_query($con,$sql1);

  }
  else
  {
    echo "mail not sent";
  } 

}


?>
<?php
include "footer.php";
?>

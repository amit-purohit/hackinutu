<?php  
  include 'header.php';
?>
<head>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src=".\..\bootstrap\jquery\jquery-3.5.0.min.js"></script>
</head>

<link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert2.css">
<form action="signup_page.php" method="POST" enctype="multipart/form-data">

  <section class="padding-y-100 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card shadow-v2"> 

            <!-- code by me -->
            
             <!-- <div class="alert bg-primary text-white px-4 py-3 alert-dismissible fade show" role="alert">
              <strong id="success"> </strong> 
              <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert">
                <i class="ti-close"></i>
              </button>
            </div> -->
            <!-- code by me -->

            <div class="card-header border-bottom" style="background-color: #00CB54; text-align: center;">

              <h4 class="mt-4">
               User Registration
              </h4>
            </div>         
            <div class="card-body">
              <div class="row">
<!--               <div class="col my-2">
                <button class="btn btn-block btn-facebook">
                 <i class="ti-facebook mr-1"></i>
                 <span>Facebook Sign in</span>
               </button>
             </div> -->
             <div class="col my-2">
              <button type="button" class="btn btn-block btn-outline-secondary" id="inst">
               <!-- <i class="ti-google mr-1"></i> -->
               <span><a href="instructor_signup.php">For Instructor Registration Click here</a></span>
             </button>
           </div>
         </div>
        <!--  <p class="text-center my-4">
          OR
        </p> -->
        <form action="" method="POST" class="px-lg-4">
          <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white ti-user"></span>
            </div>
            <input type="text" name="fullname" class="form-control border-left-0 pl-0" placeholder="Full Name">
          </div>
          <div id="emaild" class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white ti-email"></span>
            </div>
            <input type="text" id="email" name="email" class="form-control border-left-0 pl-0" placeholder="Email">
          </div>

          <div id="photo" class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white ti-image"></span>
            </div>
            <input type="file" id="myimage" name="myimage" class="form-control border-left-0 pl-0" placeholder="Upload your image">
          </div>

          <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white ti-lock"></span>
            </div>
            <input type="password" name="password" class="form-control border-left-0 pl-0" placeholder="Password" >
          </div>
          <div class="my-4">
            <label class="ec-checkbox check-sm my-2 clearfix">
              <input type="checkbox" name="checkbox">
              <span class="ec-checkbox__control mt-1"></span>
              <span class="ec-checkbox__lebel">
                By signing up, you agree to our 
                <a href="page-terms-and-privacy-policy.html" class="text-primary">Terms of Use</a>
                and
                <a href="page-terms-and-privacy-policy.html" class="text-primary">Privacy Policy.</a>
              </span>
            </label>
          </div>
          <input type="submit" id="submit"  class="btn btn-block btn-primary" name="submit" value="Register Now">
          <p class="my-2 text-center">
            Already have an account? <a href="login_page.php" class="text-primary">Login</a>
          </p>
          <p class="text-center">
            Already have an account? <a href="instructor_login_page.php" class="text-primary">Login as Instructor?</a>
          </p>
        </form>
      </div>
    </div>
  </div> 
</div> <!-- END row-->
</div> <!-- END container-->
</section>
</form>

<?php
include 'footer.php';
?>


<!-- database code -->


<script type="text/javascript">
  /*$(document).ready(function() {
    $("#submit").click(function() {
     Swal.fire({
        type:'success';
        title:'Registered Successfully'
        text:'Thank You'
     });
   });
  });
  */

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript" src="sweetalert/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="sweetalert/dist/sweetalert2.js"></script>

</script>


<?php

include "C:/wamp64/www/mystudysite/connection.php";

$myimage = $_FILES['myimage']['name'];

if(isset($_POST["submit"]))
{
  $fullname=$_POST["fullname"];
  $email=$_POST["email"];
  $password=$_POST["password"];

  $img_name = $_FILES['myimage']['name'];
  $img_size = $_FILES['myimage']['size'];
  $img_tmp = $_FILES['myimage']['tmp_name'];
  $img_type = $_FILES['myimage']['type'];
  $img_ext = strtolower(end(explode('.', $_FILES['myimage']['name'])));

  $extensions = array(
    "jpeg",
    "jpg",
    "png"
  );

  if (in_array($img_ext, $extensions) === false )
  {
    $errors[] = "extension not allowed, please choose a jpg or jpeg file.";
  }

    // if($file_size > 10097152){
    //    $errors[]='File size must be excately 10 MB';
    // }
  if (empty($errors) == true)
  {
    // move_uploaded_file($file_tmp, 'books/' . $file_name);

    move_uploaded_file($_FILES["myimage"]["tmp_name"],"userImages/" . $_FILES["myimage"]["name"]);
    echo "Success";

    echo $_FILES['myimage']['name'];
  }
  else
  {
    print_r($errors);
  }

  if(empty($fullname))
  {
    $fullname=null;
  }else{

    $fullname="'".$fullname."'";
  }
  if(empty($email))
  {
    $email=null;
  }else{
    $email = "'".$email."'";

  }
  if(empty($password))
  {
    $password=null;
  }else{
    $password = "'".$password."'";
  }

  $sql="INSERT INTO `user_master`(`user_id`, `user_name`, `email`, `password`) VALUES (NULL,$fullname,$email,$password)";
 
  echo $sql;
  $result=mysqli_query($con,$sql);

  if($result)
  {
    echo "<script>
    Swal.fire(
    'Good job!',
    'Registered Successfully done!',
    'success'
  )</script>";
}

else 
{
  echo "<script>Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Pls Enter proper detail!',

  })</script>";
}
}

?>

<script type="text/javascript">

  $("#inst").click(function(event) {
                  // $("#submit").hide();
                  $("#submit").attr('id', 'inst_submit')
                  .attr('name', 'inst_submit');

                  

                });


              </script>






              <!-- <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-email"></span>
                </div>
                <input type="text" id="course" name="course" class="form-control border-left-0 pl-0" placeholder="Course You want to teach">
              </div> -->



             
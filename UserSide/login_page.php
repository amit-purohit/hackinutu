<?php 
include 'header.php';
?>

<link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert2.css">
<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="card shadow-v2"> 
         <div class="card-header border-bottom">
          <h4 class="mt-4">
            Log In to Your BCASTUFFS Account!
          </h4>
        </div>         
        <div class="card-body">
          <div class="row">
            <div class="col my-2">
              <button class="btn btn-block btn-facebook">
               <i class="ti-facebook mr-1"></i>
               <span>Facebook Sign in</span>
             </button>
           </div>
           <div class="col my-2">
            <button class="btn btn-block btn-google-plus">
             <i class="ti-google mr-1"></i>
             <span>Google Sign in</span>
           </button>
         </div>
       </div>
       <p class="text-center my-4">
        OR
      </p>
      <form method="POST" action="" class="px-lg-4" style="">
        <div class="input-group input-group--focus mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text bg-white ti-email"></span>
          </div>
          <input type="text" name="email" class="form-control border-left-0 pl-0" placeholder="Email" autocomplete="on">
        </div>

        

        <div class="input-group input-group--focus mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text bg-white ti-lock"></span>
          </div>
          <input type="password" name="password" class="form-control border-left-0 pl-0" placeholder="Password">
        </div>
        <div class="d-md-flex justify-content-between my-4">
          <label class="ec-checkbox check-sm my-2 clearfix">
            <input type="checkbox" name="checkbox">
            <span class="ec-checkbox__control"></span>
            <span class="ec-checkbox__lebel">Remember Me</span>
          </label>
          <a href="./../AdminSide/forgotpassword.php" class="text-primary my-2 d-block">Forgot password?</a>
        </div>
        <input type="submit" class="btn btn-block btn-primary" name="submit" value="Log In">
        <p class="my-5 text-center">
          Don’t have an account? <a href="signup_page.php" class="text-primary">Register</a>
        </p>
      </form>
    </div>
  </div>
</div> 
</div> <!-- END row-->
</div> <!-- END container-->
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript" src="sweetalert/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="sweetalert/dist/sweetalert2.js"></script>


<?php
include 'footer.php';
?>


<?php
 include "C:/wamp64/www/mystudysite/connection.php";
 function mysql_fix_string($conn, $string) 
 {    
  if (get_magic_quotes_gpc()) $string = stripslashes($string);   
  return $conn->real_escape_string($string);  
} 

 if(isset($_POST["submit"]))
 {
    
     $email= mysql_fix_string($con, $_POST['email']);
    
     $password=mysql_fix_string($con, $_POST['password']);
      $sql="select * from user_master where email='$email'and password='$password'";
      $result=mysqli_query($con, $sql);
      
      if( mysqli_num_rows($result) > 0 )
        { 
          //echo $sql;
          $row=mysqli_fetch_array($result);
          $_SESSION["logged_in"] = true; 
          $_SESSION["name"] = $row['user_name'];
          $_SESSION["userid"]=$row['user_id'];
          $_SESSION['email']=$row['email'];

          //echo $_SESSION["userid"];
            
          echo "<script>
            Swal.fire(
          'Good job!',
          'Login successfull!',
          'success'
        );window.open('index.php','_self');
        </script>";
        
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

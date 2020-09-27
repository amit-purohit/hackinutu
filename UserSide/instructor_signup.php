<?php 
include 'header.php';

?>

<head>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <!-- <script type="text/javascript" src=".\..\bootstrap\jquery\jquery-3.5.0.min.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="sweetalert/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="sweetalert/dist/sweetalert2.js"></script>
</head>

<link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert2.css">
<form action="instructor_signup.php"method="post" enctype="multipart/form-data">

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
                Instructor Registration
              </h4>
            </div>         
            <div class="card-body">
              <form action="" method="POST" class="px-lg-4" enctype="multipart/form-data">
                <div class="input-group input-group--focus mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white ti-user"></span>
                  </div>
                  <input type="text" name="fullname" class="form-control border-left-0 pl-0"
                  placeholder="Full Name">
                </div>
                <div class="input-group input-group--focus mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white ti-email"></span>
                  </div>
                  <input type="text" id="email" name="email" class="form-control border-left-0 pl-0"
                  placeholder="Email">
                </div>
                <div class="input-group input-group--focus mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white ti-book"></span>
                  </div>
                  <input type="text" id="course" name="course" class="form-control border-left-0 pl-0"
                  placeholder="Course You want to teach">
                </div>
                <div class="input-group input-group--focus mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white ti-bookmark"></span>
                  </div>
                  <input type="text" id="spec" name="spec" class="form-control border-left-0 pl-0"
                  placeholder="Specialized In">
                </div>
                
                <div class="input-group input-group--focus mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white ti-location-pin"></span>
                  </div>
                  <input type="text" id="state" name="state" class="form-control border-left-0 pl-0"
                  placeholder="state You live in?">
                </div>
                <div class="input-group input-group--focus mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white ti-image"></span>
                  </div>
                  <input type="file" name="myimage"  class="form-control border-left-0 pl-0">
                </div>
                <div class="input-group input-group--focus mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white ti-lock"></span>
                  </div>
                  <input type="password" name="password" class="form-control border-left-0 pl-0"
                  placeholder="Password">
                </div>
                
                <div class="my-4">
                  <label class="ec-checkbox check-sm my-2 clearfix">
                    <input type="checkbox" name="checkbox">
                    <span class="ec-checkbox__control mt-1"></span>
                    <span class="ec-checkbox__lebel">
                      By signing up, you agree to our
                      <a href="page-terms-and-privacy-policy.html" class="text-primary">Terms of
                      Use</a>
                      and
                      <a href="page-terms-and-privacy-policy.html" class="text-primary">Privacy
                      Policy.</a>
                    </span>
                  </label>
                </div>
                <input type="submit" id="submit" class="btn btn-block btn-primary" name="submit"
                value="Register Now">
                <p class="my-2 text-center">
                  Already have an account? <a href="login_page.php" class="text-primary">Login</a>
                </p>
                <p class="text-center" >
                  Already have an account? <a href="instructor_login_page.php"
                  class="text-primary">Login as Instructor?</a>
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


<?php
include "connection.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$course = $_POST['course'];
$spec = $_POST['spec'];
$state = $_POST['state'];
$password = $_POST['password'];
$myimage = $_FILES['myimage']['name'];


if ( isset($_POST['submit']))
{
  echo $myimage;
  $errors = array();

  // $img_name = $_FILES['myimage']['name'];
  // $img_size = $_FILES['myimage']['size'];
  // $img_tmp = $_FILES['myimage']['tmp_name'];
  // $img_type = $_FILES['myimage']['type'];
  // $img_ext = strtolower(end(explode('.', $_FILES['myimage']['name'])));

  // $extensions = array(
  //   "jpeg",
  //   "jpg"
  // );

  // if (in_array($img_ext, $extensions) === false )
  // {
  //   $errors[] = "extension not allowed, please choose a jpg or jpeg file.";
  // }

  //   // if($file_size > 10097152){
  //   //    $errors[]='File size must be excately 10 MB';
  //   // }
  // if (empty($errors) == true)
  // {
  //   // move_uploaded_file($file_tmp, 'books/' . $file_name);

  //   move_uploaded_file($_FILES["myimage"]["tmp_name"],"facultyImages/" . $_FILES["myimage"]["name"]);
  //   echo "Success";

  //   echo $_FILES['myimage']['name'];
  // }
  // else
  // {
  //   print_r($errors);
  // }

     if (empty($fullname))
  {
    $fullname = null;
  }
  else
  {

    $fullname = "'" . $fullname . "'";
  }
  if (empty($email))
  {
    $email = null;
  }
  else
  {
    $email = "'" . $email . "'";

  }
  if (empty($password))
  {
    $password = null;
  }
  else
  {
    $password = "'" . $password . "'";
  }
  if (empty($course))
  {
    $course = null;
  }
  else
  {

    $course = "'" . $course . "'";
  }
  if (empty($spec))
  {
    $spec = null;
  }
  else
  {

    $spec = "'" . $spec . "'";
  }
  if (empty($state))
  {
    $state = null;
  }
  else
  {

    $state = "'" . $state . "'";
  }


  $sql = "INSERT INTO `instructor_master`(`instructor_id`, `instructor_name`, `email`, `state`, `specialized_in`, `course`, `password`) VALUES (NULL,$fullname ,$email ,$state , $spec , $course ,$password)";

  echo $sql;

  if (mysqli_query($con, $sql))
  {
    echo "record uploaded successfully";
  }
  else
  {
    echo "Insertion failed.";
  }
}



?>







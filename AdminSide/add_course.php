<?php
include "header.php";
include "connection.php";
?>

<form action="add_course.php" method="post" enctype="multipart/form-data">
  <div class="container-fluid page__container" style="margin-left: 200px">
    <div class="container-fluid page__container">
      <div class="row">
        <div class="col-md-12">
          <div class="h1">
            Add Course
          </div>
          <div class="form-group">
            <label>Enter the course name:</label><br>
            <input class="form-control" type="text" name="Course">
          </div>

          <div class="form-group">
            <label>Fees of course:</label><br>
            <input class="form-control" type="text" name="fees">
          </div>

          <div class="form-group">
           <label>Upload the image related to the course:</label><br>
           <input type="file" name="coursepic">
         </div>

         <div>
           <input class="btn btn-primary" type="submit" name="save">
         </div>

       </div>
     </div>
   </div>
 </div>
</div>
</div>

</form>
<script type="text/javascript" src="C:/wamp64/www/mystudysite/assets/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="sweetalert/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="sweetalert/dist/sweetalert2.js"></script>
 <link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert2.css">


<?php
error_reporting(1);


if(isset($_POST['save']))
{
  $course=$_POST['Course'];
  $image = $_FILES['coursepic']['name'];
  $fees=$_POST['fees'];
  // echo  $image;
  //echo $courseimg;
  $query="INSERT INTO course_master(course_name,fees,pic) VALUES ('$course',$fees,'$image')";
  // echo $query;
  $run=mysqli_query($con,$query);
  if($run == TRUE)
  {
  echo "<script>
            Swal.fire(
          '',
          'Course successfully Uploaded',
          'success'
        );
        </script>";
  }

  else
  {
   echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops... Unable to add course',
            text: 'Pls Enter proper detail!',
          })</script>";
 }
}
$errors = array();
$file_name = $_FILES['coursepic']['name'];
$file_size = $_FILES['coursepic']['size'];
$file_tmp = $_FILES['coursepic']['tmp_name'];
$file_type = $_FILES['coursepic']['type'];
$file_ext = strtolower(end(explode('.', $_FILES['coursepic']['name'])));

$extensions = array(
  "jpg",
  "jpeg",
  "png",
  "bmp",
  "ico"
);

if (in_array($file_ext, $extensions) === false)
{
  //$errors[] = "extension not allowed, please choose a pdf or zip file.";
}


if (empty($errors) == true)
{
    // move_uploaded_file($file_tmp, 'books/' . $file_name);
  move_uploaded_file($_FILES["coursepic"]["tmp_name"],"./../UserSide/assets/courseImages/" . $_FILES["coursepic"]["name"]);
  //echo "Success";


  $_FILES['coursepic']['name'];
}
else
{
  print_r($errors);
}


?>
<?php
include "sidebar.php";
?>




















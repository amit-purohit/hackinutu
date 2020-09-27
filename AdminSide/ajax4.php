   <?php
   error_reporting(1);
   include "connection.php";

   $id = $_POST["id"];
   $q=mysqli_query($con,"select * from user_master where user_id=$id");
  			// $r=mysqli_fetch_row($q);
  			// $course_id=$r[1];
  			// $result=mysqli_query($con,"select * from topic_master where course_id=$course_id");

   while($row=mysqli_fetch_assoc($q))
   {
     
      $data=$row;
   }
   echo json_encode($data);

   ?>

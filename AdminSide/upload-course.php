<?php
include 'header.php';
?>
<head>
  <title>Upload Topic</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert2.css">



  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript" src="sweetalert/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="sweetalert/dist/sweetalert2.js"></script>

</head>
<body>
  <form action="upload-course.php" method="POST" enctype="multipart/form-data">

      
        <div class="row" style="padding-left: 300px;">
          <div class="col-md-12">
            <div class="h1">
              Add Topic
            </div>
            <div class="form-group">
              <label>Select the course:</label><br>
              <div class="dropdown">
                <select id="coursedd" name="course_names" onchange="change_topic()">
                  <option class="dropdown-item">Select Course</option>
                  <?php

                  error_reporting(1);
                  include 'C:/wamp64/www/mystudysite/connection.php'; 

                  $query="select * from course_master";
                  $result=mysqli_query($con,$query);
                  while($row=mysqli_fetch_array($result))
                  {
                    echo"<option>$row[1]</option>";
                  }
                  ?>
                </select>
              </div>

            </div>
            <div class="form-group">
              <label class="">Enter the topic:</label><br>
              <input class="form-control" type="text" name="topic1">
            </div>

            <div >
             <input class="btn btn-primary" type="submit" name="save1" value="Upload">
           </div>

         </div>
       </div>
  

 </form>

 <script type="text/javascript" src="C:/wamp64/www/mystudysite/assets/bootstrap/js/bootstrap.min.js"></script>
 <!-- sweetalert files -->
 

 <script type="text/javascript">

  function change_topic()
  {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("POST","ajax.php?course="+document.getElmentById("coursedd"),"false");
    xmlhttp.send(null);
  }
</script>
</body>
 


<?php

// error_reporting(1);
include 'C:/wamp64/www/mystudysite/connection.php';




if(isset($_POST['save1']))
{
  $coursename=$_POST['course_names'];
  $sql1="select course_id from course_master where course_name='$coursename'";
  echo $sql1 . "<br />";
  $result1=mysqli_query($con,$sql1);


  while($row1=mysqli_fetch_assoc($result1))
  {
    $cid=$row1['course_id'];
  }


  echo $cid;
  $title1=$_POST['topic1'];
  echo $title1;
  $sqll="INSERT INTO `topic_master` VALUES (NULL,$cid,'$title1')";
  $result2=mysqli_query($con,$sqll);
  echo "<meta http-equiv='refresh' content='0'>";
  echo $sqll;
  echo $result2;
  if($result2)
  {
   
   echo "<script>
            Swal.fire(
          '',
          'Topic successfully Uploaded',
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

?>

<?php

include 'sidebar.php';

?>


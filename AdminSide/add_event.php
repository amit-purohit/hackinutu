<?php
include 'header.php';
?>
<head>
  <title>Upload Event and competition</title>

  </head>
  <body>
    <form action="add_event.php" method="post" enctype="multipart/form-data">

      <div class="form-group" style="padding-left: 300px;">
                 



                  <div class="form-group">
                    <label>Enter the name of the event:</label>
                    <input type="text" name="event" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Upload the image of event:</label><br>
                    <input type="file" name="myimage" class="form-control"><!-- myimage -->
                  </div>

                  <div class="form-group">
                    <label>Enter the date:</label><br>
                    <input type="date" name="date" class="form-control"><!--  data -->
                  </div>

                  <div class="form-group">
                    <label>Enter the place(where event will take place?):</label><br>
                    <input type="text" name="place" class="form-control"><!--  place -->
                  </div>

                  <div class="form-group">
                    <label>Enter the url:</label><br>
                    <input type="text" name="url" class="form-control"><!-- url -->
                  </div>

                  <div >
                   <input class="btn btn-primary" type="submit" name="save" value="Upload">
                 </div>
               </div>

             </form>
             <script type="text/javascript" src="C:/wamp64/www/mystudysite/assets/bootstrap/js/bootstrap.min.js"></script>
           </body>

         </script>

         <?php
         include 'connection.php';
         error_reporting(1);
         $event = $_POST['event'];
         $url = $_POST['url'];
         $image = $_FILES['myimage']['name'];
         $place = $_POST['place'];
         $date = $_POST['date'];
//echo "image". $image."<br />";


         if (isset($_FILES['myimage']) && isset($_POST['save']))
         {
          $errors = array();
  // $file_name = $_FILES['myfile']['name'];
  // $file_size = $_FILES['myfile']['size'];
  // $file_tmp = $_FILES['myfile']['tmp_name'];
  // $file_type = $_FILES['myfile']['type'];
  // $file_ext = strtolower(end(explode('.', $_FILES['myfile']['name'])));

          $img_name = $_FILES['myimage']['name'];
  //echo $img_name ."img <br />";
          $img_size = $_FILES['myimage']['size'];
          $img_tmp = $_FILES['myimage']['tmp_name'];
          $img_type = $_FILES['myimage']['type'];
          $img_ext = strtolower(end(explode('.', $_FILES['myimage']['name'])));

          $extensions = array("png","jpeg","jpg");

          if (in_array($img_ext, $extensions) == false)
          {
            $errors[] = "extension not allowed, please choose a jpeg,jpg or png file.";
          }


          if (empty($errors) == true)
          {
            move_uploaded_file($_FILES["myimage"]["tmp_name"],"./../UserSide/assets/img/360x220/". $_FILES["myimage"]["name"]);
            echo "Success";
          }
          else
          {
            print_r($errors);
          }

          $sql = "INSERT INTO event_master(event_name,event_date,event_place,event_pic,url) VALUES('$event','$date','$place','$img_name','$url')";

  //echo "sql" .$sql. "<br />";
          if (mysqli_query($con, $sql))
          {
            echo "File uploaded successfully <br />";
          }
          else
          {
            echo "Failed to upload file. <br />";
          }
        }
        ?>


        <?php
        include "sidebar.php";
        ?>

<?php
include 'header.php';
?>
<head>
  <title>Upload Content</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
  <form action="add_event.php" method="POST" enctype="multipart/form-data">
    <div class="mdk-header-layout__content">

      <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
        <div class="mdk-drawer-layout__content page ">
          <div class="container-fluid page__container">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Select the course:</label><br>
                  <div class="dropdown">
                    <select id="coursedd" name="coursedd" onChange="change_topic(this.value)">
                      <option class="dropdown-item">Select Course</option>
                      <?php
                        //error_reporting(1);
                      include 'C:/wamp64/www/mystudysite/connection.php';

                      $query = "select * from course_master";
                      $result = mysqli_query($con, $query);
                      while ($row = mysqli_fetch_array($result))
                      {
                        echo "<option value='$row[0]'>$row[1]</option>";
                      }
                      ?>
                    </select>
                  </div>

                </div>
                <div class="form-group">
                  <label>Upload the book:</label><br>
                  <input class="form-control" type="file" name="myfile" accept="application/pdf">
                </div>
                <div class="form-group">
                  <label>Upload the image(front page of the book):</label><br>
                  <input class="form-control" type="file" name="myimage" accept="">
                </div>

                <div >
                 <input class="btn btn-primary" type="submit" name="save" value="Upload">
               </div>

             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </form>
 <script type="text/javascript" src="C:/wamp64/www/mystudysite/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</script>

<?php
include 'C:/wamp64/www/mystudysite/connection.php';
error_reporting(1);
$course_id = $_POST['coursedd'];
$image = $_FILES['myimage']['name'];


if (isset($_FILES['myfile']) && isset($_FILES['myimage']) && isset($_POST['save']))
{
  $errors = array();
  $file_name = $_FILES['myfile']['name'];
  $file_size = $_FILES['myfile']['size'];
  $file_tmp = $_FILES['myfile']['tmp_name'];
  $file_type = $_FILES['myfile']['type'];
  $file_ext = strtolower(end(explode('.', $_FILES['myfile']['name'])));

  $img_name = $_FILES['myimage']['name'];
  $img_size = $_FILES['myimage']['size'];
  $img_tmp = $_FILES['myimage']['tmp_name'];
  $img_type = $_FILES['myimage']['type'];
  $img_ext = strtolower(end(explode('.', $_FILES['myimage']['name'])));

  $extensions = array(
    "pdf",
    "zip",
    "png",
    "jpeg",
    "jpg"
  );

  if (in_array($file_ext, $extensions) === false && in_array($img_ext, $extensions))
  {
    $errors[] = "extension not allowed, please choose a pdf or zip file.";
  }

    // if($file_size > 10097152){
    //    $errors[]='File size must be excately 10 MB';
    // }
  if (empty($errors) == true)
  {
    // move_uploaded_file($file_tmp, 'books/' . $file_name);
    move_uploaded_file($_FILES["myfile"]["tmp_name"],"books/" . $_FILES["myfile"]["name"]);
    move_uploaded_file($_FILES["myimage"]["tmp_name"],"bookImages/" . $_FILES["myimage"]["name"]);
    echo "Success";


    $_FILES['myfile']['name'];
    $_FILES['myimage']['name'];
  }
  else
  {
    print_r($errors);
  }

  $sql = "INSERT INTO book_master  VALUES (NULL,$course_id,'$file_name','$img_name')";
  if (mysqli_query($con, $sql))
  {
    echo "File uploaded successfully";
  }
  else
  {
    echo "Failed to upload file.";
  }
}
?>
<?php
  include "footer.php";
?>
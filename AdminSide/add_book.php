<?php
include 'header.php';
include "connection.php";
?>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group" style="padding-left: 300px;">
	<label>Select the course:</label>
	<br>
	<div class="dropdown">
		<select id="coursedd" name="coursedd" >
			<option class="dropdown-item">Select Course</option>
			<?php
				//error_reporting(1);
			
			$query = "select * from course_master";
			$result = mysqli_query($con, $query);
			while ($row = mysqli_fetch_array($result)) 
			{
			    echo "<option value='$row[0]'>$row[1]</option>";
			}
?>
		</select>
	</div>

	<div class="form-group">
		<label>Upload the book:</label>
		<br>
		<input class="form-control" type="file" name="book" id="book" accept="">
	</div>

	<div class="form-group">
		<label>Upload the image(front page of the book):</label>
		<br>
		<input class="form-control" type="file" name="myimage" id="myimage" accept="">
	</div>

	<!-- <div class="form-group">
		<label>Category : </label>
		<br>
		<input class="form-control" type="text" name="catgry" >
	</div>

	<div class="form-group">
		<label>author : </label>
		<br>
		<input class="form-control" type="text" name="author" >
	</div> -->

	<div class="form-group">
		<label>Price : </label>
		<br>
		<input class="form-control" type="number" name="price" >
	</div>

	<div>
		<input type="submit" name="submit" id="submit" class="btn btn-primary"  value="Upload">
	</div>

</div>
</form>
<script type="text/javascript" src="C:/wamp64/www/mystudysite/assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</script>

<?php
include 'sidebar.php';
?>

<?php

error_reporting(1);
$courseid= $_POST["coursedd"];
$category =$_POST["catgry"];
$author = $_POST["author"];
$price =$_POST["price"];
// $uploadbookdir = '/books';
// $uploadbookimage = '/bookImages';



if(isset($_POST["submit"]))
{
	$bookimage=$_FILES["myimage"]["name"];
   $bookname=$_FILES["book"]["name"];

    $errors = array();


			
			  $img_size = $_FILES['myimage']['size'];
			  $img_tmp = $_FILES['myimage']['tmp_name'];
			  $img_type = $_FILES['myimage']['type'];
			  $img_ext = strtolower(end(explode('.', $_FILES['myimage']['name'])));


			  
			  $file_size = $_FILES['book']['size'];
			  $file_tmp = $_FILES['book']['tmp_name'];
			  $file_type = $_FILES['book']['type'];
			  $file_ext = strtolower(end(explode('.', $_FILES['book']['name'])));



			  $extensions1 = array(
			  	"jpeg",
			  	"jpg",
			  	"png"
			  );

			  $extensions2 = array(
			  	"pdf",
			  	"epub"
			  );

			  if (in_array($img_ext, $extensions1) === false )
			  {
			  	$errors[] = "extension not allowed, please choose a jpg or jpeg  type file.";
			  }
			  if(in_array(file_ext,$extensions2)){
			  		$errors[] = "extension not allowed, please choose a pdf or epub type  file.";
			  }

    // if($file_size > 10097152){
    //    $errors[]='File size must be excately 10 MB';
    // }
			  if (empty($errors) == true)
			  {
    

			  	 move_uploaded_file($_FILES["myimage"]["tmp_name"],"bookImages/" . $_FILES["myimage"]["name"]);
			  	 move_uploaded_file($_FILES["book"]["tmp_name"],"books/" . $_FILES["book"]["name"]);
			  	

			  	echo "file upload sucess";
			  }

			  else 
			  {
			  	 print_r($error);
			  }

	$sql = "insert into book_master(course_id,book_name ,book_image, price) values($courseid, '$bookname','$bookimage', $price)";



	//echo $sql;

	if (mysqli_query($con, $sql))
	{
		 echo "<script>
	            Swal.fire(
	          '',
	          'Book successfully Uploaded',
	          'success'
	        );
	        </script>";
	}
	else
	{
		 echo "<script>Swal.fire({
                icon: 'error',
                title: 'Oops... Unable to add Book',
                text: 'Pls Enter proper detail!',
              })</script>";
	}
}



?>
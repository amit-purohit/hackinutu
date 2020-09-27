 <?php
        error_reporting(1);
       include 'C:/wamp64/www/mystudysite/connection.php'; 

				
					$course=$_GET["coursedd"];
					// $id = $_POST['id'];
					$q=mysqli_query($con,"select * from topic_master where course_id=$course");
					$r=mysqli_fetch_row($q);
					$course_id=$r[1];
					
					 $result=mysqli_query($con,"select * from topic_master where course_id=$course_id");
					
					while($row=mysqli_fetch_row($result)) 
					{
						
						echo "<option value=$row[0]>$row[2]</option>";

					}
					
?>







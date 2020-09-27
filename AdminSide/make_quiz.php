<?php
include 'header.php';
include 'connection.php';
?>

<head>
	
	<title>Upload Content</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<style type="text/css" href="/bootstrap/css/bootstrap.css"></style>
	<!-- <script type="text/javascript" src="/bcastuffs/bootstrap/jquery/jquery3_4_1.js"></script> -->
	<!-- <script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script> -->
	<!-- <script type="text/javascript" src="./../bootstrap/js/bootstrap.min.js"></script> -->
	
</head>
<body style="font-size: 20px;">
	<!-- <div class="container-fluid page__container">
		<div class="row">
			<div class="col-md-12"> -->
				<div class="form-group" style="padding-left: 20px;">
					<form action="" method="POST" enctype="multipart/form-data">
						<label>Select the course:</label>
						<div class="dropdown">
							<select id="coursedd" name="coursedd" onChange="change_topic(this.value)">
								<option>Select Course</option>
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
						</div><br>
						<label>Enter the quiz name:</label><br>
						<input type="text" name="quizname"><br>
						<label>Select the no of questions:</label><br>
						<input type="number" name="noque" min="1" max="20">
						<div><br>
							<input class="btn btn-primary" type="submit" name="save" id="save" value="Add the Quiz">
						</div>

					</div>
				<!-- </div>
			</div>
		</div> -->

		<?php

		error_reporting(1);
		if(isset($_POST['save']) )
		{
			$cid=$_POST['coursedd'];
			$quizname=$_POST['quizname'];
			$noque=$_POST['noque'];
			$sql="INSERT INTO quiz(quiz_id,quiz_name,course_id,no_of_questions) VALUES (NULL,'$quizname',$cid,$noque)";
            


			$result=mysqli_query($con,$sql);

			if($result)
			{
				echo "<script> Swal.fire(
             '',
             'Quiz successfully Uploaded',
             'success'
             );</script>";

			}
			else{
				echo "<script>Swal.fire({
                icon: 'error',
                title: 'Oops... Unable to add Quiz',
                text: 'Pls Try Again properly!',
              });</script>";
			}
		}
		?>


		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card-body">
						<!-- <form method="POST" action=""> -->

							<table class="table table-bordered table-hover" border="1" >
								<tbody class="">
									<tr class="" style="background-color: lightblue;">
										<td>quiz id</td>
										<td>quiz name</td>
										<td>course name</td>
										<td>no of questions</td>
										<td>status</td>
										<td>activate the quiz</td>
										<td>View Quiz</td>
									</tr>

									<?php
									$sql2 = "SELECT q.quiz_id,q.quiz_name,c.course_name,q.no_of_questions,q.status,q.course_id from quiz q,course_master c where q.course_id=c.course_id";
									
									$run2=mysqli_query($con,$sql2);


									while($result3=mysqli_fetch_array($run2))
									{

										?>
										<tr>
											<td><?php echo $result3[0];?></td>
											<td><?php echo $result3[1]; ?></td>
											<td><?php echo $result3[2];?></td>
											<td><?php echo $result3[3];?></td>
											<td><?php echo $result3[4];?></td>
											<td>
												<?php if($result3[4] == 0){
													echo "<a href='active_quiz?quiz_id=$result3[0]'>active</a>";

												}
												else{
													echo "<a href='active_quiz?quiz_id=$result3[0]'>inactive</a>";
												}
												?>
											</td>
											<td><a href="view-quiz.php?quiz_id=<?php echo $result3[0] ;?>&course_id=<?php echo $result3[5] ;?>&noque=<?php echo $result3[3];?>">View the Quiz</a></td>
										</tr>

											<?php
										}

										?>
									</tbody>
								</table>

								<!-- 	</form> -->
							</div>
						</div>
					</div>
				</div>
			</form>
		</body>
<?php
 include "sidebar.php";

?>



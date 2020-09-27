<?php
include 'header.php';
include 'connection.php';
?>
<head>
	<title>Upload Content</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<style type="text/css" href="./../bootstrap\css\bootstrap.min.css"></style>
	<!-- <script type="text/javascript" src="./../bcastuffs/bootstrap/jquery/jquery3_4_1.js"></script> -->
	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="./../bootstrap/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="container-fluid page__container">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<form action="add_quiz.php" method="POST" enctype="multipart/form-data">
						<label>Select the course:</label><br>
						<div class="dropdown">
							<select id="coursedd" name="coursedd" onChange="change_topic(this.value)">
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
							<label>Enter the question:</label><br>
							<input class="form-control" type="text" name="que" id="que">
						</div>
						<div class="form-group">
							<label>OPTION 1:</label><br>
							<input class="form-control" name="option1" id="option1" type="text">
						</div>

						<div class="form-group">
							<label>OPTION 2:</label><br>
							<input class="form-control" name="option2" id="option2" type="text">
						</div>

						<div class="form-group">
							<label>OPTION 3:</label><br>
							<input class="form-control" name="option3" id="option3" type="text">
						</div>

						<div class="form-group">
							<label>OPTION 4:</label><br>
							<input class="form-control" name="option4" id="option4" type="text">
						</div>

						<div class="form-group">
							<label>ANSWER:</label><br>
							<input class="form-control" name="answer" id="answer" type="text">
						</div>

						<div id="fooBar">
							<input type="hidden" name="coursee" id="coursee">
							<input type="hidden" name="quee" id="quee">
							<input class="btn btn-primary" type="submit" name="save" id="save" value="Upload the Question">
							<input class="btn btn-primary" type="submit" name="edit" id="edit" value="EDIT">
							<script type="text/javascript">
								$("#edit").hide();	
							</script>
							
							<span id="fooBar">&nbsp;</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</script>

<!-- edit the ques -->
<?php

if(isset($_POST['edit']))
{
	$queid=$_POST['quee'];
	$que=$_POST['que'];
	$op1=$_POST['option1'];
	$op2=$_POST['option2'];
	$op3=$_POST['option3'];
	$op4=$_POST['option4'];
	$ans=$_POST['answer'];
	$cid=$_POST['coursee'];
	$queid=$_POST['quee'];

	$sql3="UPDATE que_master SET que_id=$queid, course_id=$cid,que='$que',option1='$op1',option2='$op2',option3='$op3',option4='$op4',answer='$ans' WHERE que_id=$queid";
	echo $sql3;
	$res=mysqli_query($con,$sql3);

	if($res)
	{
		echo '<script>
		alert("updated");
		</script>';
	}
	else
	{
		echo '<script>
		alert("not updated");
		</script>';
	}
}




?>

<!-- edit the quiz ends here -->



<?php

error_reporting(1);
if(isset($_POST['save']))
{
	$que=$_POST['que'];
	$op1=$_POST['option1'];
	$op2=$_POST['option2'];
	$op3=$_POST['option3'];
	$op4=$_POST['option4'];
	$ans=$_POST['answer'];
	$cid=$_POST['coursedd'];

	$sql="insert into que_master values(null,$cid,'$que','$op1','$op2','$op3','$op4','$ans')";
	// echo $sql;
	$run=mysqli_query($con,$sql);
	if($run)
	{
		 echo "<script>
             Swal.fire(
             '',
             'Question successfully Uploaded',
             'success'
             );
             </script>";
	}
	else{
		 echo "<script>Swal.fire({
                icon: 'error',
                title: 'Oops... Unable to add Question',
                text: 'Pls Enter Question properly!',
              })</script>";
	}
	
}

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card-body">
				<!-- <form method="POST" action=""> -->

					<table class="table table-bordered" border="1" >
						<tbody class="">
							<tr class="" style="background-color: lightblue;">
								<th>Question</th>
								<th>Option 1</th>
								<th>Option 2</th>
								<th>Option 3</th>
								<th>Option 4</th>
								<th>Answer</th>
								<th>EDIT</th>
								<th>DELETE</th>
							</tr>

							<?php

							$sql2="select * from que_master";
							$run2=mysqli_query($con,$sql2);

							$counter=0;
							while($result3=mysqli_fetch_array($run2))
							{

								?>
								<tr>
									<td><?php echo $result3[2];?></td>
									<td><?php echo $result3[3];?></td>
									<td><?php echo $result3[4];?></td>
									<td><?php echo $result3[5];?></td>
									<td><?php echo $result3[6];?></td>
									<td><?php echo $result3[7];?></td>

									<td><input type="hidden" id="cedit<?php echo $counter;?>"  value="<?php echo $result3[0]; ?>">
										<button id="edit<?php echo $counter;?>"  class="ced"><i class="fa fa-edit" style="font-size:28px;color:blue"></i></button></td>
										<td><input type="hidden" id="delete" name="delete" value="<?php echo $result3['que_id']; ?>">


											<a href="quedel.php?id=<?php echo $result3[0]; ?>" onclick="return confirm('Do You want to delete?') " >
												<i  class="fa fa-trash" style="font-size:28px;color:blue"></i></a></td>

											</tr>
											<?php
											$counter++;		
										}

										?>
									</tbody>
								</table>

								<!-- 	</form> -->
							</div>
						</div>
					</div>
				</div>

<!-- <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">

			
		
							<div class="modal-content">
<div class="modal-header">
						<button type="button" class="close bg-danger" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" ></h4>
					</div>
					<div class="modal-body">
						<p>Do you really want to delete ?</p>
					</div>
					<div class="modal-footer">
						<button type="button" id="cdel" class="btn btn-outline-primary" data-dismiss="modal">Yes</button>
					</div>
				</div>

			</div>
		</div> -->


		
		<script type="text/javascript"> 
			

			$(".ced").on("click",function() {
				var lbl = $(this).attr("id");
				var lid = lbl.substring(4);
				
				var id  = $("#cedit"+lid).val();
		//$("#idc").val(id);
				//alert(id);


				$.ajax({
					url: "ajax3.php",
					method : "POST",
					data : "id="+id,
					//dataType: "json", 
					success: function(data){
						//alert(data);
						var myobj=$.parseJSON(data);
						// alert(myobj.que_id);
						$("#quee").val(myobj.que_id);
						$("#coursee").val(myobj.course_id);
						$("#que").val(myobj.que);
						$("#option1").val(myobj.option1);
						$("#option2").val(myobj.option2);
						$("#option3").val(myobj.option3);
						$("#option4").val(myobj.option4);
						$("#answer").val(myobj.answer);
						$("#coursedd").val(myobj.course_id)
						$("#save").hide();
						$("#edit").show();
						document.getElementById("save").disabled = true;
						// var element = $('<input/>').attr({ type: 'button', name:'btn1', value:'EDIT',class:'btn btn-primary'});
						// 	$("#fooBar").append(element);
						// 	console.log(myobj);

						
					}
				});


			});
			
		</script>
		<?php
		include "sidebar.php";
		?>








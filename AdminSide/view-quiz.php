<?php
include 'header.php';
include 'connection.php';
?>


<head>
	
	<title>Upload Content</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<style type="text/css" href="/bootstrap/css/bootstrap.css"></style>
	<script type="text/javascript" src="/bcastuffs/bootstrap/jquery/jquery3_4_1.js"></script>
	<!-- <script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="./../bootstrap/js/bootstrap.min.js"></script>
	
</head>
<body style="font-size: 20px;">




	<div class="container-fluid page__container">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class='panel-title'> 
									<?php
									error_reporting(0);

									$quizid=$_GET['quiz_id'];
									$courseid=$_GET['course_id'];
									$noque=$_GET['noque'];
									//echo $quizid .  $courseid . $noque;
									
									$sql2 = "select * from quiz where quiz_id = $quizid";
									$res3= mysqli_query($con,$sql2);

									if($row3= mysqli_fetch_assoc($res3))
									{
										// echo $row3['quiz_name'];
										echo "<h3 style='color:blue;'  >".$row3['quiz_name']."</h3>";
										
									}
									
									?>
								</div>
								<?php
								$sql="select que_id from que_master where course_id=$courseid";
								$res=mysqli_query($con,$sql);
								$datas=array();
								if(mysqli_num_rows($res) > 0)
								{
									while($row=mysqli_fetch_assoc($res))
									{
										$datas[]=$row;
									}
								}
								?>


								<?php
								foreach($datas as $value)
								{
									$num[]=$value['que_id'];
										//echo $value['que_id'] . "<br>";

								}




								$min = min($num);
								$max = max($num);

								function UniqueRandomNumbersWithinRange($min, $max, $quantity) 
								{
									$numbers = range($min, $max);
									shuffle($numbers);
									return array_slice($numbers, 0, $quantity);
								}

								$data2=UniqueRandomNumbersWithinRange($min,$max,$noque);
								$list = implode(",", $data2);
									// echo $list;
								?>
								<div class="panel-body">
									<?php
									 $counter =1;
									$sql1 = "select * from que_master where que_id IN ($list)";
									//echo "h" .$sql1 ;
									$res1 = mysqli_query($con,$sql1);
									if($res1)
									{
										while($row1=mysqli_fetch_assoc($res1))
										{

											echo "<h4>".$counter."&nbsp; &nbsp;". $row1['que'] ."</h4>";

											?>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios<?php echo $counter; ?>" id="optionsRadios1" value="option1" ><?php echo $row1['option1']?>
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios<?php echo $counter; ?>" id="optionsRadios2" value="option2"> <?php echo $row1['option2']?>
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios<?php echo $counter; ?>" id="optionsRadios3" value="option3"><?php echo $row1['option3']?>
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios<?php echo $counter; ?>" id="optionsRadios4" value="option4"> <?php echo $row1['option4']?>
												</label>
											</div>
											<span id="answer" class="text-success"><?php echo $row1['answer']; ?></span>
											<?php
											$counter++;
										}
									}
									

									?>

								  </div>
								  <button type="button" class="btn btn-primary" id="submitanswer">Submit Quiz and View Answer</button>
										<!-- <div class="panel-footer">
											<a href="#" class="btn btn-primary " role="button"></a>
											<a href="#" class="btn btn-default disabled" role="button">Avanti</a>
										</div> -->
									</div>

								</div>
								<!-- aa -->


							</form>
						</div>
					</div>
				</div>
			</div>
		</body>

<script type="text/javascript">
	$(document).ready(function(){
		//$("#answer").hide();
		$('#submitanswer').click(function(){
			var check = true;
			$("input:radio").each(function(){
				var name = $(this).attr("name");
				if($("input:radio[name="+name+"]:checked").length == 0){
					check = false;
				}
			});

			if(check){
				alert('One radio in each group is checked.');
				$("#answer").show();
				
			}else{
				alert('Please select one option in each question.');
			
			}
		});
});
</script>


<?php
 include "sidebar.php";

?>





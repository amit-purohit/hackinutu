<?php
include "header.php";
include "connection.php";

?>

<head>
	
	<title>Upload Content</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
</head>
<body>

	<div class="container-fluid page__container">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<form action="checked.php" method="post" enctype="multipart/form-data">
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
										echo '<h3 class="text-center"  style="color:blue;">'.$row3["quiz_name"].'</h3>';
										
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
								$_SESSION["arraylist"] = $list;

										// $list1 = serialize($list);
										// echo $list1.PHP_EOL;
										// $list2=substr($list,0);
										// echo $list2;
										?>
										<input type="hidden" name="arraylist" value="<?php echo serialize($list) ; ?>">
										<?php
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
												
													<input type="radio" name="optionsRadios[<?php echo $counter; ?>]"  value="<?php echo $row1['option1']?>" >
													<?php echo $row1['option1']; ?>

												
											</div>
											<div class="radio">
												
													<input type="radio" name="optionsRadios[<?php echo $counter; ?>]"  value="<?php echo $row1['option2']?>"> 
													<?php echo $row1['option2']; ?>
												
											</div>
											<div class="radio">
												
													<input type="radio" name="optionsRadios[<?php echo $counter; ?>]"  value="<?php echo $row1['option3']?>">
													<?php echo $row1['option3']; ?>
												
											</div>
											<div class="radio">
												
													<input type="radio" name="optionsRadios[<?php echo $counter; ?>]"  value="<?php echo $row1['option4']?>"> 
													<?php echo $row1['option4']; ?>
												
											</div>
											<!-- <span id="answer" class="text-success">?php echo $row1['answer']; ?></span> -->
											<?php
											$counter++;
										}
										?>
										<script>
											$(document).ready(function(){
												$("input[type='button']").click(function(){
													var radioValue = $("input[name='optionsRadios<?php echo $counter; ?>']:checked").val();
													if(radioValue){
														alert("Your are a - " + radioValue);
													}
												});
											});
										</script>
										<?php
									}
									?>

								</div>
								<input type="submit" class="btn btn-primary" style="margin: 2rem;" id="submitanswer" value="Submit Answer" name="submitanswer">
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

			<?php
			// if(isset($_POST['submitanswer']))
			// {
			// 	echo '<script>alert("button pressed");
			// 	window.open("checked.php"."_self");
			// 	</script>';
			// 	//header('Location:checked.php');
			// }
			?>
			<!-- <script type="text/javascript">
				$(document).ready(function(){
					$("#submitanswer").click(function(event) {
						if (!$("input[name='radio']:checked").val()) {
							alert('Nothing is checked!');
						}
						else {
							alert('One of the radio buttons is checked!');
						}
					});
					
				});


				$(document).ready(function(){
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
						}else{
							alert('Please select one option in each question.');
						}
					});
				});
				
			</script> -->

		</body>

		<?php
		include "footer.php";
		?>
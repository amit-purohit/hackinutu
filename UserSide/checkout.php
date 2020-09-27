<?php
include "connection.php";
error_reporting(1);
session_start();     
               	 $user=$_SESSION["userid"];
               //	echo $user;
               	$sql3="INSERT INTO `fees_master`(`fees_id`, `user_id`, `course_id`) VALUES (null,$user,$cid)";
				$result = mysqli_query($con,$sql3);
				//echo $sql3;
               	 $cid=$_GET['cid'];
     	 		 $_SESSION['cid']=$cid;
               	$sql2="select * from fees_master where user_id=$user and course_id=$cid";
               	$result2=mysqli_query($con,$sql2);
               	$run=mysqli_fetch_array($result2);

                echo '
                  <script>
                    var a = '.$cid.';
                  </script>
                ';

               	if(mysqli_num_rows($result2) > 0)
               	{
               		echo "<script>
                    window.open('course_page.php?cid='+encodeURI(a),'_self');
                    </script>";
               	}

               	
			               

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card-body">
					<form method="POST" action="paytm/PaytmKit/pgRedirect.php">

						<table class="table table-bordered" border="1" style="width: 50%; margin-left: 50%; margin-top: 10%; border-radius: 20%;">
							<tbody class="">
								<tr class="" style="background-color: lightblue;">
									<th>S.No</th>
									<th>Label</th>
									<th>Value</th>
								</tr>
								<tr>
									<td>1</td>
									<td><label>ORDER ID</label></td>
									<td><input class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
										name="ORDER_ID" autocomplete="off"
										value="<?php echo  "ORDS" . rand(10000,99999999)?>">
									</td>
								</tr>

								<tr>
									<td>2</td>
									<td><label>USER ID</label></td>
									<td><input id="ORDER_ID" class="form-control"
										value="<?php echo $_SESSION["userid"]; ?>">
									</td>
								</tr>


								<tr>
									<td>3</td>
									<td><label>course_id </label></td>
									<td><input class="form-control" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_GET['cid'];?>"></td>
								</tr>
								<tr>
									<td>4</td>
									<td><label>INDUSTRY_TYPE_ID</label></td>
									<td><input class="form-control" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
								</tr>
								<tr>
									<td>5</td>
									<td><label>Channel </label></td>
									<td><input class="form-control" id="CHANNEL_ID" tabindex="4" maxlength="12"
										size="12" name="CHANNEL" autocomplete="off" value="WEB">
									</td>
								</tr>
								<tr>
									<td>6</td>
									<td><label>txnAmount</label></td>
									<td><input class="form-control" title="AMOUNT" tabindex="10"
										type="text" name="TXN_AMOUNT"
										value="<?php echo $_GET['fees'];?>">
									</td>
								</tr>
								<tr>
									<td colspan="3"><input class="form-control  btn-outline-primary" value="CheckOut" type="submit"></td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
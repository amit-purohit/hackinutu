<?php
include 'header.php';
?>
<head>
	<title>Fees Management</title>
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">-->
</head>
<form action="fees_manage.php" method="POST" enctype="multipart/form-data">


	<div class="form-group" style="padding-left: 300px;">
		<h4 class="h4">Manage Fees </h4>
		<table  class="table table-bordered table-striped">
			<tr>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>COURSE ENROLLED</th>
				<th>TOTAL FEES</th>
				<th>PENDING FEES</th>
				<th>INFORM TO PAY</th>
			</tr>

			<?php
			include 'C:/wamp64/www/mystudysite/connection.php';
			error_reporting(1);
			$sql = " SELECT u.user_name,u.email, c.course_name, c.fees,c.fees -f.fees_paid from user_master u,course_master c,enrollment_master e,fees_master f,instructor_master i where u.user_id=e.user_id and c.course_id=e.course_id";
			$result=mysqli_query($con,$sql);

			while($row=mysqli_fetch_array($result))
			{
				echo "
				<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
				<td>$row[4]</td>
				<td><a href='informfees.php?email=$row[1] & pend=$row[4]'>INFORM</a></td>
				</tr>

				";

			}
			?>

		</table>
	</div>
</form>


<?php
  include 'sidebar.php';
?>

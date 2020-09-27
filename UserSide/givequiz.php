<?php
include "header.php";
?>
<head>
	<script type="text/javascript" src="../bootstrap/jquery/jquery3_4_1.js"></script>
</head>
<body style="font-size: 16px;">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table text-center">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">quiz</th>
						<th scope="col">No of Questions</th>
						<th scope="col">Attend</th>
					</tr>
				</thead>
<?php
$counter = 1;
include_once "connection.php";
$sql = "select * from quiz ORDER BY quiz_name ASC";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
	$title=$row['quiz_name'];
	$no=$row['no_of_questions'];
	$quizid=$row['quiz_id'];
	$noque=$row['no_of_questions'];
	$courseid=$row['course_id'];
	echo '

				<tbody>
					<tr>
						<th scope="row">'.$counter.'</th>
						<td>'.$title.'</td>
						<td>'.$no.'</td>
						<td><a href="attend-quiz.php?quiz_id='.$row['quiz_id'].'&noque='.$noque.'&course_id='.$courseid.'" class="btn btn-success btn-sm">start</a></td>
					</tr>

				</tbody>
	
         ';
$counter++;
}

?>
		</table>
		</div>
	</div>
</div>

</body>

<?php
include "footer.php";
?>





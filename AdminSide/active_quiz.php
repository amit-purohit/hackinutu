<?php

include 'header.php';
include 'connection.php';

$quiz_id=$_GET['quiz_id'];

$sql1="select * from quiz where quiz_id=$quiz_id";

$res1=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($res1))
{
	$status=$row[4];
	echo $status;
	if($status == 0)
	{
		$sql2="UPDATE quiz SET status=1 WHERE quiz_id=$quiz_id";
		echo $sql2;
		$res2=mysqli_query($con,$sql2);
		if($res2)
		{
			echo "<script>window.open('make_quiz.php','_self');</script>";
		}
		

	}
	else
	{
		$sql3="UPDATE quiz SET status=0 WHERE quiz_id=$quiz_id";
		echo $sql3;
		$res3=mysqli_query($con,$sql3);
		if($res3)
		{
			echo "<script>window.open('make_quiz.php','_self');</script>";
		}
		
		
	}
}

?>
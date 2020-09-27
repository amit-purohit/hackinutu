<?php

include 'header.php';
include 'connection.php';

$inst_id=$_GET['inst_id'];

$sql1="select * from instructor_master where instructor_id=$inst_id";

$res1=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($res1))
{
	$status=$row[7];
	echo $status;
	if($status == 0)
	{
		$sql2="UPDATE instructor_master SET is_approved=1 WHERE instructor_id=$inst_id";
		echo $sql2;
		$res2=mysqli_query($con,$sql2);
		if($res2)
		{
			echo "<script>window.open('view-instructor.php','_self');</script>";
		}
		

	}
	else
	{
		$sql3="UPDATE instructor_master SET is_approved=0 WHERE instructor_id=$inst_id";
		echo $sql3;
		$res3=mysqli_query($con,$sql3);
		if($res3)
		{
			echo "<script>window.open('view-instructor.php','_self');</script>";
		}
		
		
	}
}

?>
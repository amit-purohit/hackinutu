<?php
include 'connection.php';
$id=$_GET['id'];
$sql="delete from instructor_master where instructor_id=$id";

$res=mysqli_query($con,$sql);
if($res)
{
	
	header('location:instructor-account-edit.php');
	
}
else
{
	echo "error";
}



?>
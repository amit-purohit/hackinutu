<?php
include 'connection.php';
$id=$_GET['id'];
$sql="delete from user_master where user_id=$id";

$res=mysqli_query($con,$sql);
if($res)
{
	
	header('location:student-account-edit.php');
	
}
else
{
	echo "error";
}



?>
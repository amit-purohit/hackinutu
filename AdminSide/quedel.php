<?php
include 'connection.php';
$id=$_GET['id'];
$sql="delete from que_master where que_id=$id";

$res=mysqli_query($con,$sql);
if($res)
{
	
	header('location:add_quiz.php');
	
}
else
{
	echo "error";
}



?>
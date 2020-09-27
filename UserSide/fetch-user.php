<?php
include "connection.php";
$s1=$_POST["n"];
echo $s1;
$select_query="select * from user_master where user_name like '%".$s1."%'";
$sql=mysqli_query($con,$select_query) or die (mysql_error());
$s="";
while($row=mysqli_fetch_array($sql))
{
	$s=$s." 
            <a class='link-p-colr' href='view.php?product=".$row['id']."'>
              <div class='live-outer'>
                  <div class='live-im'>
                      <img src='".$row['pic']."'/>
                  </div>
                  <div class='live-product-det'>
                      <div class='live-product-name'>
                          <p>".$row['user_name']."</p>
                      </div>
                      
                  </div>
              </div>
            </a>
  "	;
}
echo $s;
?>

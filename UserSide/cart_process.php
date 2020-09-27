<?php
session_start();

   $poid = $_POST['bid'];
  $name= $_POST['book_name'];
  $price=$_POST['book_price'];
  echo $poid;

 

  if($_SESSION["productcart"])
  {
      $currentno = $_SESSION['counter'] + 1;
      $_SESSION['productcart'] [$currentno]= $poid;  
      $_SESSION['counter'] = $currentno;

  }
  else{
    $productcart = array();
    $qtycart = array();
    $_SESSION['productcart'][0] = $poid;
    $_SESSION['counter'] = 0; 

  }

 header("location:shop-cart.php");

?>
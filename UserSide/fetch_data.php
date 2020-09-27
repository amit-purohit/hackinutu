<?php
 include "connection.php";
 ?>

 <?php
 error_reporting(1);
 //echo "hello";
 if(isset($_POST['action']))
 {
 	$query = "SELECT * from book_master ORDER BY book_id ASC";

 	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
		//echo " price ".$query;
	}


 	if(isset($_POST['author'])){
 		$author_filter = implode("','", $_POST['author']);
 		$query .= "and author in('".$author_filter."')";

 	}

 	if(isset($_POST['category'])){
 		$category_filter = implode("','", $_POST['category']);
 		$query .= "and category in('".$category_filter."')";

 	}

 	$exec = mysqli_query($con,$query);
 	
 	$count = mysqli_num_rows($exec);
 	$output ='';


 	//echo $query;
 	//echo $count. "   count of";
 	if($count > 0)
 	{
 		while($row = mysqli_fetch_assoc($exec)) {
 			$output .='   
   

 <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn">
	<div class="card text-center height-100p shadow-v1">
		<span class="badge badge-pill badge-primary position-absolute top-20 left-10">-20%</span>
		<div class="card-header">
		
		<input type="hidden" name="hidden_name" value="'.$row[book_name].'" />
		<input type="hidden" name="hidden_price" value="'.$row[price].'" />
			<img class="w-100" src="./../AdminSide/bookImages/'. $row[book_image] .'"  style="height:300px;" >
		</div>
		<div class="card-body px-3 py-0">
			<a href="./../AdminSide/books/'.$row[book_name].'" class="h6" download>'.$row[book_name].'</a>
			<a href="./../AdminSide/books/'.$row[book].'" class="h6" download>'.$row[book].'</a>
			<p class="text-gray">
				'.$row[author].'
			</p>
			<div class="d-flex align-items-center justify-content-between">
				<p class="mb-0 font-weight-semiBold">
					<span class="text-primary">₹'.$row[price].'</span>
					
				</p>
				<ul class="list-unstyled ec-review-rating font-size-12">
					<li class="active"><i class="fas fa-star"></i></li>
					<li class="active"><i class="fas fa-star"></i></li>
					<li class="active"><i class="fas fa-star"></i></li>
					<li class="active"><i class="fas fa-star"></i></li>
					<li class="active"><i class="fas fa-star"></i></li>
				</ul>
			</div>
		</div>
		<input type="hidden" id="hidden_id" name="hidden_id" value="'.$row[book_id].'" />
		<input type="number" id="quantity" name="quantity" min="1" max="5" placeholder="Enter the quantity" value="1" />
		<input type="submit" name="add_to_cart" class="btn btn-outline-light mx-2" value="Add to cart" />

</div>
</div>
          
            ';
 		}
 	}
 	else
 	{
 		$output = "<h3>No Data Found !!!</h3>";
 	}
      echo $output;
     
     
 }
     
     
?>






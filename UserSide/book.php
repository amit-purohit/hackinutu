<?php
   include_once 'header.php';
   include "connection.php";
?>

<body>
   <?php
      if(isset($_POST["add_to_cart"]))  
      {  
      	$id = $_POST["hidden_id"];
      //	echo "<script>alert($id)</script>";
      	if(isset($_SESSION["shopping_cart"]))  
      	{  
      		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
      		if(!in_array($_POST["id"], $item_array_id))  
      		{  
      			$count = count($_SESSION["shopping_cart"]);  
      			$item_array = array(  
      				'item_id'               =>     $_POST["hidden_id"],  
      				'item_name'               =>     $_POST["hidden_name"],  
      				'item_price'          =>     $_POST["hidden_price"],  
      			  'item_quantity'          =>     $_POST["quantity"]  
      			);  
      			$_SESSION["shopping_cart"][$count] = $item_array;  
      		}  
      		else  
      		{  
      			echo '<script>alert("Item Already Added")</script>';  
      			echo '<script>window.location="shop-cart.php"</script>';  
      		}  
      	}  
      	else  
      	{  
      		$item_array = array(  
      			'item_id'               =>     $_POST["hidden_id"],  
      			'item_name'               =>     $_POST["hidden_name"],  
      			'item_price'          =>     $_POST["hidden_price"],  
      		  'item_quantity'          =>     $_POST["quantity"]  
      		);  
      		$_SESSION["shopping_cart"][0] = $item_array;  
      	}  
      }  
      if(isset($_POST["action"]))  
      {  
      	if($_GET["action"] == "delete")  
      	{  
      		foreach($_SESSION["shopping_cart"] as $keys => $values)  
      		{  
      			if($values["item_id"] == $_POST["hidden_id"])  
      			{  
      				unset($_SESSION["shopping_cart"][$keys]);  
      				echo '<script>alert("Item Removed")</script>';  
      				echo '<script>window.location="shop-cart.php"</script>';  
      			}  
      		}  
      	}  
      } 
      ?>

   <script>
      function filter_data() {
      	$('.filter_data').html('<img src="./../AdminSide/gif/load.gif"  style ="margin:200px 400px 350px; height:70px; ">');
      	var action = 'fetch_data';
      	var minimum_price = $('#hidden_minimum_price').val();
      	var maximum_price = $('#hidden_maximum_price').val();
      	var author = get_filter('author');
      	var category = get_filter('category');
      
      	$.ajax({
      		url: "fetch_data.php",
      		method: "POST",
      		data: {
      			action: action,
      			minimum_price: minimum_price,
      			maximum_price: maximum_price,
      			author:author,
      			category:category
      		},
      		success: function(data) {
      			$('.filter_data').html(data);
      		}
      	});
      }
      
      function get_filter(class_name)
      {
      	var filter = [];
      	$('.'+class_name+':checked').each(function(){
      		filter.push($(this).val());
      	});
      	return filter;
      }
   </script>
   <form action="book.php?id=<?php echo $_GET["book_id"]; ?>" method="POST">
      <section class="pt-5 paddingBottom-100 bg-light-v2">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div id="accordion">
                     <div class="card card-body accordion-item marginTop-30">
                        <a href="#acc1" class="accordion__title h6 mb-0" data-toggle="collapse" aria-expanded="true">
                        Filter by Category
                        <span class="accordion__icon float-right small mx-2 mt-1">
                        <i class="ti-angle-down"></i>
                        <i class="ti-angle-up"></i>
                        </span>
                        </a>
                        <div id="acc1" class="collapse show" data-parent="#accordion">
                           <div class="mt-4">
                              <p class="mb-2">
                                 <label class="ec-checkbox">
                                 <input type="checkbox" name="checkbox"> <span class="ec-checkbox__control"></span> <span class="ec-checkbox__lebel">All Categories</span> </label>
                              </p>
                              <?php
                                 $sql1 = "select DISTINCT(category) from book_master ORDER BY category ASC";
                                 $exec1 = mysqli_query($con, $sql1);
                                 while ($row = mysqli_fetch_assoc($exec1)) 
                                 {
                                 	?>
                              <p class="mb-2">
                                 <label class="ec-checkbox">
                                 <input type="checkbox" name="checkbox" class="category common_selector" value="<?php echo $row['category'];  ?>"> <span class="ec-checkbox__control"></span> <span class="ec-checkbox__lebel">
                                 <?php
                                    echo $row[category];
                                    ?>
                                 </span> </label>
                              </p>
                              <?php
                                 }
                                 ?>
                           </div>
                        </div>
                     </div>
                     <!-- END accordion-item-->
                     <div class="card card-body accordion-item marginTop-30">
                        <a href="#acc2" class="accordion__title h6 mb-0 collapsed" data-toggle="collapse" aria-expanded="true">
                        Filter by Author
                        <span class="accordion__icon float-right small mx-2 mt-1">
                        <i class="ti-angle-down"></i>
                        <i class="ti-angle-up"></i>
                        </span>
                        </a>
                        <div id="acc2" class="collapse" data-parent="#accordion">
                           <div class="mt-4">
                              <p class="mb-2">
                                 <label class="ec-checkbox">
                                 <input type="checkbox" name="checkbox"> <span class="ec-checkbox__control"></span> <span class="ec-checkbox__lebel">All Authors</span> </label>
                              </p>
                              <?php
                                 $sql = "SELECT DISTINCT(author) from book_master ORDER BY author ASC";
                                 $exec = mysqli_query($con,$sql);
                                 while ($row1  = mysqli_fetch_assoc($exec)) 
                                 {
                                 	?>
                              <p class="mb-2">
                                 <label class="ec-checkbox">
                                 <input type="checkbox" name="checkbox" class="author common_selector" value="<?php echo $row1['author'];  ?>"> 
                                 <span class="ec-checkbox__control"></span> 
                                 <span class="ec-checkbox__lebel">
                                 <?php echo $row1[author]; ?>
                                 </span> 
                                 </label>
                              </p>
                              <?php
                                 }
                                 
                                 ?>
                           </div>
                        </div>
                     </div>
                     <div class="card card-body accordion-item marginTop-30">
                        <a href="#acc3" class="accordion__title h6 mb-0 collapsed" data-toggle="collapse" aria-expanded="true">
                        Filter by Price
                        </a>
                        <input type="hidden" id="hidden_minimum_price" value="0">
                        <input type="hidden" id="hidden_maximum_price" value="4000">
                        <div id="price_range" style="margin: 20px 20px 20px 20px; ">
                        </div>
                        <div id="price_show" style="align:center; margin-left:50px;">
                        </div>
                        <script type="text/javascript">
                           $("#price_range").slider({
                           	range: true,
                           	min: 0,
                           	max: 2000,
                           	values: [0, 2000],
                           	step: 1,
                           	stop: function(event, ui) {
                           		$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                           		$('#hidden_minimum_price').val(ui.values[0]);
                           		$('#hidden_maximum_price').val(ui.values[1]);
                           		filter_data();
                           	}
                           });
                        </script>
                        <div id="acc3" class="collapse" data-parent="#accordion">
                           <div class="marginTop-20">
                              <div id="rangeSlide1" class="ec-range-slider"></div>
                              <div class="d-flex align-items-center mt-4">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="row filter_data">
                  </div>
                  <div class="col-12 marginTop-60">
                     <ul class="pagination pagination-primary align-items-center justify-content-between">
                        <li class="page-item mx-1">
                           <a class="page-link btn btn-sm width-auto rounded-pill" href="#"> <i class="ti-arrow-left small mr-2"></i> Previous </a>
                        </li>
                        <li class="page-item mx-1">Page 2 of 45</li>
                        <li class="page-item mx-1"> <a class="page-link btn btn-sm rounded-pill" href="#">
                           Next
                           <i class="ti-arrow-right small ml-2"></i>
                           </a> 
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- END row-->
            </div>
            <!-- END col-md-9-->
         </div>
         <!-- END row-->
         </div>
         <!-- END container-->
         <!-- </body> -->
      </section>
   </form>
   <script>
      $(document).ready(function() {
      	filter_data();
      
      	function filter_data() {
      		$('.filter_data').html('<img src="./../AdminSide/gif/load.gif"  style ="margin:200px 400px 350px; height:70px; ">');
      		var action = 'fetch_data';
      		var minimum_price = $('#hidden_minimum_price').val();
      		var maximum_price = $('#hidden_maximum_price').val();
      		var author = get_filter('author');
      		var category = get_filter('category');
      
      		$.ajax({
      			url: "fetch_data.php",
      			method: "POST",
      			data: {
      				action: action,
      				minimum_price: minimum_price,
      				maximum_price: maximum_price,
      				author:author,
      				category:category
      			},
      			success: function(data) {
      				$('.filter_data').html(data);
      			}
      		});
      	}
      
      
      	function get_filter(class_name)
      	{
      		var filter = [];
      		$('.'+class_name+':checked').each(function(){
      			filter.push($(this).val());
      		});
      		return filter;
      	}
      
      	$('.common_selector').click(function(){
      		filter_data();
      	});
      
      	$('#price_range').slider({
      		range: true,
      		min: 0,
      		max: 2000,
      		values: [0, 2000],
      		step: 1,
      		stop: function(event, ui) {
      			$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
      			$('#hidden_minimum_price').val(ui.values[0]);
      			$('#hidden_maximum_price').val(ui.values[1]);
      			filter_data();
      		}
      	});
      
      
      });
   </script>
   <?php echo $query; ?>
   </form>
</body>
<?php
   include 'footer.php';
   ?>
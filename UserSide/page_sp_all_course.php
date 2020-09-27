<?php 
include 'header.php';
$user = $_SESSION['userid'];
?>


<form action="" method="post">

	
	<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 my-2 text-white">
					<ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Courses</a></li>
						<li class="breadcrumb-item">All Courses</li>
					</ol>
					<h2 class="h1">
						All Courses Grid
					</h2>
					<p class="lead">
						<span class="text-primary">6,178</span> courses found
					</p>
				</div>
				<form class="col-lg-5 my-2 ml-auto">
					<div class="input-group bg-white rounded p-1">
						<input type="text"  name="search_text" id="search_text" class="form-control border-white" placeholder="What do you want to learn?" required="">
						<div class="input-group-append">
							<button class="btn btn-info rounded" type="submit">
								Search
								<i class="ti-angle-right small"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!-- <section class="py-3 position-relative shadow-v1">
		<div class="container">
			<form class="row">
				<div class="col-md-6 my-2">
					<ul class="list-inline">
						<li class="list-inline-item my-2">
							<select class="form-control">
								<option selected>Select Category</option>
								<option>UI/UX design</option>
								<option>Web app</option>
								<option>React</option>
								<option>Game development</option>
							</select>
						</li>
						<li class="list-inline-item my-2">
							<select class="form-control">
								<option selected>Filter</option>
								<option>Best selling</option>
								<option>Newest</option>
								<option>Top rated</option>
								<option>Low price</option>
								<option>High price</option>
							</select>
						</li>
					</ul>
				</div>
				<div class="col-md-6 my-2 text-md-right">
					<div class="d-inline-flex justify-md-content-end">
						<select class="form-control my-2">
							<option selected default>items per page</option>
							<option>8</option>
							<option>12</option>
							<option>16</option>
							<option>20</option>
							<option>24</option>
						</select> 
						<div class="d-flex rounded border ml-3 px-2 my-2">
							<a href="page-sp-all-courcess.html" class="active btn px-1"><ti class="ti-layout-grid2"></ti></a>
							<a href="page-sp-all-courcess-list.html" class="btn px-1"><ti class="ti-view-list"></ti></a>
						</div>
					</div>
				</div>
			</form> 
		</div> 
	</section> -->




<!-- <section class="padding-y-60 bg-light-v2">
	<div class="container">
		<div class="row"> -->
			<div id="result"></div>
		<!-- </div>
	</div>
</section> -->










<!-- feedback -->
<section>
	<div class="col-12 marginTop-70">
		<ul class="pagination pagination-primary justify-content-center">
			<li class="page-item mx-1">
				<a class="page-link iconbox iconbox-sm rounded-0" href="#">
					<i class="ti-angle-left small"></i>
				</a>
			</li>
			<li class="page-item mx-1">
				<a class="page-link iconbox iconbox-sm rounded-0" href="#">1</a>
			</li>
			<li class="page-item active disabled mx-1">
				<a class="page-link iconbox iconbox-sm rounded-0" href="#">2</a>
			</li>
			<li class="page-item mx-1">
				<a class="page-link iconbox iconbox-sm rounded-0" href="#">3</a>
			</li>
			<li class="page-item disabled mx-1">
				<a class="page-link iconbox iconbox-sm rounded-0" href="#">
					<i class="ti-more-alt"></i>
				</a>
			</li>
			<li class="page-item mx-1">
				<a class="page-link iconbox iconbox-sm rounded-0" href="#">16</a>
			</li>
			<li class="page-item mx-1">
				<a class="page-link iconbox iconbox-sm rounded-0" href="#">
					<i class="ti-angle-right small"></i>
				</a>
			</li>
		</ul>
	</div>
</div> 
</div> 

<?php 

  $user=$_SESSION["userid"];
        $sql4 = "select * from enrollment_master where user_id=$user";
        $result4 = mysqli_query($con,$sql4);
        $count2 = mysqli_num_rows($result4);
        // echo $sql4 ."<br>";
        // echo $count2;
        echo '<script> var a = '.$count2.'</script>'
        
 ?>


<script type="text/javascript">
	
	$(document).ready(function(){


		load_data();
		function load_data(query)
		{
			
			$.ajax({
				url:"fetch.php",
				method:"post",
				data:{query:query},
				success:function(data)
				{
					$('#result').html(data);
				}
			});
		}
		
		$('#search_text').keyup(function(){
			var search = $(this).val();
			if(search != '')
			{
				
				load_data(search);
			}
			else
			{
				load_data();      
			}
		});

		
		
	});
	

</script> 




</section>
</form>

<?php
include 'footer.php';
?>




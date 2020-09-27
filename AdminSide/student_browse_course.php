<?php
include 'header.php';
include 'connection.php';
?>

<body>
	<div class="container-fluid page__container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
			<li class="breadcrumb-item active">Courses</li>
		</ol>
		<div class="media align-items-center mb-headings">
			<div class="media-body">
				<h1 class="h2">Courses</h1>
			</div>
			<div class="media-right">
				<div class="btn-group btn-group-sm">
					<a href="#" class="btn btn-white active"><i class="material-icons">list</i></a>
					<a href="#" class="btn btn-white"><i class="material-icons">dashboard</i></a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!-- <div class="card-columns">

			<div class="card">
				<div class="card-header text-center">
					<h4 class="card-title mb-0"><a href="student-take-course.html">Learn C++</a></h4>
					<div class="rating">
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star_border</i>
					</div>
				</div>
				<a href="student-take-course.html">
					<img src="assets/images/vuejs.png" alt="Card image cap" style="width:100%;">
				</a>
				<div class="card-body">
					<small class="text-muted">ADVANCED</small><br>
					Let’s start with a quick tour of Vue’s data binding features. If you are more interested in ...<br>
					<span class="badge badge-primary ">VUEJS</span>
				</div>
			</div> -->


			<!-- <div class="card">
				<div class="card-header text-center">
					<h4 class="card-title mb-0"><a href="student-take-course.html">C</a></h4>
					<div class="rating">
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star_half</i>
						<i class="material-icons">star_border</i>
					</div>
				</div>
				<a href="student-take-course.html">
					<img src="assets/images/nodejs.png" alt="Card image cap" style="width:100%;">
				</a>
				<div class="card-body">
					<small class="text-muted">BEGINNER</small><br>
					Developing static website with fast and advanced gulp setup by managing all parts...<br>
					<small class="badge badge-primary ">GULP</small>
				</div>
			</div> -->

			<!-- <div class="card">
				<div class="card-header text-center">
					<h4 class="card-title mb-0"><a href="student-take-course.html">JAVA</a></h4>
					<div class="rating">
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star_border</i>
						<i class="material-icons">star_border</i>
						<i class="material-icons">star_border</i>
					</div>
				</div>
				<a href="student-take-course.html">
					<img src="assets/images/github.png" alt="" style="width:100%;">
				</a>
				<div class="card-body">
					<small class="text-muted">INTERMEDIATE</small><br>
					Learn the basics of Github and become a power Github developer.<br>
					<small class="badge badge-primary ">GULP</small>
				</div>
			</div> -->

			<!-- <div class="card">
				<div class="card-header text-center">
					<h4 class="card-title mb-0"><a href="student-take-course.html">HTML</a></h4>
					<div class="rating">
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star_border</i>
					</div>
				</div>
				<a href="student-take-course.html">
					<img src="assets/images/gulp.png" alt="Card image cap" style="width:100%;">
				</a>
				<div class="card-body">
					<small class="text-muted">ADVANCED</small><br>
					Let’s start with a quick tour of Vue’s data binding features. If you are more interested in ...<br>
					<span class="badge badge-primary ">GULP</span> <span class="badge badge-primary ">SLUSH</span>
				</div>
			</div> -->
		</div>

		<!-- Pagination -->
		<ul class="pagination justify-content-center pagination-sm">
			<li class="page-item disabled">
				<a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true" class="material-icons">chevron_left</span>
					<span>Prev</span>
				</a>
			</li>
			<li class="page-item active">
				<a class="page-link" href="#" aria-label="1">
					<span>1</span>
				</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#" aria-label="1">
					<span>2</span>
				</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
					<span>Next</span>
					<span aria-hidden="true" class="material-icons">chevron_right</span>
				</a>
			</li>
		</ul>
	</div>
</body>

<div class="container-fluid page__container">
	<div class="card-columns">
		<!-- dynamically fetch the course start here -->
		<?php
       
		$sql="select * from course_master";
		$run=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($run))
		{
			$img_src = $row['pic'];
			?>

			<div class="card">
				<div class="card-header text-center">
					<h4 class="card-title mb-0"><a href="student_take_course.php?course_id=<?php echo $row['course_id'] ?>">
						<?php  echo $row['1'];?></a></h4>
					<div class="rating">
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star</i>
						<i class="material-icons">star_border</i>
					</div>
				</div>
				<img align="center" src="./../UserSide/assets/courseImages//<?php  echo $row['pic'];?>"  alt=""  height=200px width=450px>
				<a href="student_take_course.php?course_id=<?php echo $row[0];?>">
					<h1 align="center" class="text-success">View</h1>
				</a>

				<!-- <div class="card-body">
					<small class="text-muted"></small><br>
					<br>
					<span class="badge badge-primary "></span>
				</div> -->
			</div>


	<?php
}



?>
<?php
 include 'sidebar.php';
?>

<!-- end here -->
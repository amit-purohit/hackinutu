 <?php
 error_reporting(1);
 include "connection.php";
 include 'header.php';
  // session_start(); 
 if(!isset($_SESSION['logged_in_admin'])){
 	echo "<script>window.open('login.php','_self');</script>";
 }
 ?>
 <div class="container-fluid page__container">
 	<ol class="breadcrumb">
 		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
 		<li class="breadcrumb-item active">Dashboard</li>
 	</ol>
 	<h1 class="h2">Dashboard</h1>

<!--  	<div class="card border-left-3 border-left-primary card-2by1">
 		<div class="card-body">
 			<div class="media flex-wrap align-items-center">
 				<div class="media-left">
 					<i class="material-icons text-muted-light">credit_card</i>
 				</div>
 				<div class="media-body" style="min-width: 180px">
 					Your subscription ends on <strong>25 February 2015</strong>
 				</div>
 				<div class="media-right mt-2 mt-xs-plus-0">
 					<a class="btn btn-success" href="student-account-billing-upgrade.html">Upgrade</a>
 				</div>
 			</div>
 		</div>
 	</div> -->
 	<div class="row">
 		<div class="col-lg-7">

 			<!--<div class="card">
 				<div class="card-header d-flex align-items-center">
 					<div class="h2 mb-0 mr-3 text-primary">116</div>
 					<div class="flex">
 						<h4 class="card-title">Angular</h4>
 						<p class="card-subtitle">Best score</p>
 					</div>
 					<div class="dropdown">
 						<a href="#" class="dropdown-toggle text-black-70" data-toggle="dropdown">Popular Topics</a>
 						<div class="dropdown-menu dropdown-menu-right">
 							<a href="#" class="dropdown-item">Popular Topics</a>
 							<a href="#" class="dropdown-item">Web Design</a>
 						</div>
 					</div>
 				</div>
 				<div class="card-body">
 					<div class="chart" style="height: 319px;">
 						<canvas id="topicIqChart" class="chart-canvas"></canvas>
 					</div>
 				</div>
 			</div> -->

 			<div class="card">
 				<div class="card-header">
 					<div class="media align-items-center">
 						<div class="media-body">
 							<a href="student_browse_course.php"><h4 class="card-title">Courses</h4></a>
 							
 						</div>
 						<!-- <div class="media-right">
 							<a class="btn btn-sm btn-primary" href="student-my-courses.html">My courses</a>
 						</div> -->
 					</div>
 				</div>



 				<ul class="list-group list-group-fit mb-0" style="z-index: initial;">

 					<?php

 					$sql="select * from course_master";
 					$run=mysqli_query($con,$sql);
 					while($row=mysqli_fetch_array($run))
 					{
 						$img_src = $row['pic'];
 						?>

 						<li class="list-group-item" style="z-index: initial;">
 							<div class="d-flex align-items-center">
 								<a href="student-take-course.html" class="avatar avatar-4by3 avatar-sm mr-3">
 									<img src="./../UserSide/assets/courseImages//<?php  echo $row['pic'];?>" alt="course" class="avatar-img rounded">
 								</a>
 								<div class="flex">
 									<a href="student-take-course.html" class="text-body"><strong><?php echo $row[course_name]; ?></strong></a>
 									<div class="d-flex align-items-center">
 										<div class="progress" style="width: 100px;">
 											<div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
 										</div>
 										<small class="text-muted ml-2">25%</small>
 									</div>
 								</div>
 								<div class="dropdown ml-3">
 									<a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
 										<i class="material-icons">more_vert</i>
 									</a>
 									<div class="dropdown-menu dropdown-menu-right">
 										<a class="dropdown-item" href="student_browse_course.php">Continue</a>
 									</div>
 								</div>
 							</div>
 						</li>
 						<?php  
 					}
 					?>

 				</ul>
 			</div>




 			<div class="card">
 				<div class="card-header">
 					<div class="media align-items-center">
 						<div class="media-body">
 							<a href="make_quiz.php"><h4 class="card-title">Quizzes</h4></a>
 						</div>
 						<!-- <div class="media-right">
 							<a class="btn btn-sm btn-primary" href="#">Quiz results</a>
 						</div> -->
 					</div>
 				</div>


 				<ul class="list-group list-group-fit mb-0">

 					<?php

 					$sql="select * from quiz q,course_master c where q.course_id = c.course_id";
 					$run=mysqli_query($con,$sql);
 					while($row1=mysqli_fetch_array($run))
 					{

 						?>
 						<li class="list-group-item">
 							<div class="media align-items-center">
 								<div class="media-body">
 									<a class="text-body" href="student-quiz-results.html"><strong><?php echo $row1[quiz_name]; ?></strong></a><br>
 									<div class="d-flex align-items-center">
 										No. of Questions
 										&nbsp;<strong class=" text-uppercase mr-2"><?php echo $row1[no_of_questions]; ?></strong>
 										<!-- <a href="student-take-course.html">Basics of HTML</a> -->
 									</div>
 								</div>
 								<div class="media-right text-center d-flex align-items-center">
 									<h class="mb-auto mr-2">Course : </h>
 									<span class="text-black-50 mr-3"><?php echo $row1[course_name]; ?></span>

 								</div>
 							</div>
 						</li>

 						<?php
 					}
 					?>

 					

 					

 				</ul>
 			</div>




 		</div>
 		<div class="col-lg-5">
 			<?php
 			$sql5 = "select * from instructor_master" ;
 			$result5 = mysqli_query($con,$sql5);
 			$count3 = mysqli_num_rows($result5);

 			$sql6 = "select * from user_master" ;
 			$result6= mysqli_query($con,$sql6);
 			$count4 = mysqli_num_rows($result6);

 			?>

 			<div class="card">
 				<div class="card-header d-flex align-items-center">
 					
 					<div class="flex">
 						<h4 class="card-title"></h4>
 						<p class="card-primary">Total no of instructors</p>
 					</div>
 					<div class="h2 mb-0 mr-3 text-primary"><?php echo $count3; ?></div>
 					<i class="material-icons text-muted ml-2">trending_up</i>
 				</div>
 				<!-- <div class="card-body">
 					<div class="chart" style="height: 154px;">
 						<canvas id="iqChart" class="chart-canvas"></canvas>
 					</div>
 				</div> -->
 			</div>


 			<div class="card">
 				<div class="card-header d-flex align-items-center">
 					
 					<div class="flex">
 						<h4 class="card-title"></h4>
 						<p class="card-primary">Total no of users</p>
 					</div>
 					<div class="h2 mb-0 mr-3 text-primary"><?php echo $count4; ?></div>
 					<i class="material-icons text-muted ml-2">trending_up</i>
 				</div>
 				<!-- <div class="card-body">
 					<div class="chart" style="height: 154px;">
 						<canvas id="iqChart" class="chart-canvas"></canvas>
 					</div>
 				</div> -->
 			</div>


 			<!-- <div class="card card-2by1">
 				<div class="card-header">
 					<h4 class="card-title">Rewards</h4>
 					<p class="card-subtitle">Your latest achievements</p>
 				</div>
 				<div class="card-body text-center">
 					<div class="btn btn-primary btn-circle"><i class="material-icons">thumb_up</i></div>
 					<div class="btn btn-danger btn-circle"><i class="material-icons">grade</i></div>
 					<div class="btn btn-success btn-circle"><i class="material-icons">bubble_chart</i></div>
 					<div class="btn btn-warning btn-circle"><i class="material-icons">keyboard_voice</i></div>
 					<div class="btn btn-info btn-circle"><i class="material-icons">event_available</i></div>
 				</div>
 			</div>

 			<div class="card">
 				<div class="card-header">
 					<div class="media align-items-center">
 						<div class="media-body">
 							<h4 class="card-title">Forum Activity</h4>
 							<p class="card-subtitle">Latest forum topics &amp; replies</p>
 						</div>
 						<div class="media-right">
 							<a class="btn btn-sm btn-primary" href="student-forum.html"> <i class="material-icons">keyboard_arrow_right</i></a>
 						</div>
 					</div>
 				</div> -->





 				<!-- <ul class="list-group list-group-fit">


 					<li class="list-group-item forum-thread">
 						<div class="media align-items-center">
 							<div class="media-left">
 								<div class="forum-icon-wrapper">
 									<a href="student-forum-thread.html" class="forum-thread-icon">
 										<i class="material-icons">description</i>
 									</a>
 									<a href="student-profile.html" class="forum-thread-user">
 										<img src="assets/images/people/50/guy-1.jpg" alt="" width="20" class="rounded-circle">
 									</a>
 								</div>
 							</div>
 							<div class="media-body">
 								<div class="d-flex align-items-center">
 									<a href="student-profile.html" class="text-body"><strong>Luci Bryant</strong></a>
 									<small class="ml-auto text-muted">5 min ago</small>
 								</div>
 								<a class="text-black-70" href="student-forum-thread.html">Am I learning the right way?</a>
 							</div>
 						</div>
 					</li>



 					<li class="list-group-item forum-thread">
 						<div class="media align-items-center">
 							<div class="media-left">
 								<div class="forum-icon-wrapper">
 									<a href="student-forum-thread.html" class="forum-thread-icon">
 										<i class="material-icons">description</i>
 									</a>
 									<a href="student-profile.html" class="forum-thread-user">
 										<img src="assets/images/people/50/guy-2.jpg" alt="" width="20" class="rounded-circle">
 									</a>
 								</div>
 							</div>
 							<div class="media-body">
 								<div class="d-flex align-items-center">
 									<a href="student-profile.html" class="text-body"><strong>Magnus Goldsmith</strong></a>
 									<small class="ml-auto text-muted">7 min ago</small>
 								</div>
 								<a class="text-black-70" href="student-forum-thread.html">Can someone help me with the basic Setup?</a>
 							</div>
 						</div>
 					</li>



 					<li class="list-group-item forum-thread">
 						<div class="media align-items-center">
 							<div class="media-left">
 								<div class="forum-icon-wrapper">
 									<a href="student-forum-thread.html" class="forum-thread-icon">
 										<i class="material-icons">description</i>
 									</a>
 									<a href="student-profile.html" class="forum-thread-user">
 										<img src="assets/images/people/50/woman-1.jpg" alt="" width="20" class="rounded-circle">
 									</a>
 								</div>
 							</div>
 							<div class="media-body">
 								<div class="d-flex align-items-center">
 									<a href="student-profile.html" class="text-body"><strong>Katelyn Rankin</strong></a>
 									<small class="ml-auto text-muted">12 min ago</small>
 								</div>
 								<a class="text-black-70" href="student-forum-thread.html">I think this is the right way?</a>
 							</div>
 						</div>
 					</li>


 				</ul> -->
 			</div>
 		</div>
 	</div>

 </div>

</div>

<?php
include "sidebar.php";
?>
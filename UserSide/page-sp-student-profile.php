<?php
include "header.php";
$name = $_SESSION["name"];
?>



<div class="padding-y-80 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat">
  <div class="container">
    <h2 class="text-white">
      Students Profile
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Page</a></li>
      <li class="breadcrumb-item">Students Profile</li>
    </ol>
  </div>
</div>

<?php 

$sql = "select * from user_master where user_name = '$name'";

$sql1 = "SELECT * FROM enrollment_master e,user_master u,course_master c WHERE e.user_id=u.user_id and u.user_id=e.user_id and e.course_id=c.course_id and u.user_name= '$name'";
// echo '<h4>'.$sql1.'</h4>';

$exec = mysqli_query($con,$sql);
$exec1 = mysqli_query($con,$sql1);

$count = mysqli_num_rows($exec);
$count1 =  mysqli_num_rows($exec1);
// echo'<h4>'.$count1.'</h4>';
if($count > 0 && $count1 > 0 )
{
  $row = mysqli_fetch_assoc($exec);
  $row1 = mysqli_fetch_assoc($exec1);
  ?>

  <section class="paddingTop-50 paddingBottom-100 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mt-4">
          <div class="card shadow-v1">
            <div class="card-header text-center border-bottom pt-5 mb-4">
             <img class="rounded-circle mb-4" src="./userImages/<?php echo $row[user_pic]; ?>" width="200" height="200" alt="no pic uloaded by you">
             <h4>
              <?php echo $row[user_name];
               ?>
             </h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item m-2">
                <i class="ti-shopping-cart text-primary"></i>
                <span class="d-block">Courses Order</span>
                <span class="h6"><?php echo $count1; ?></span>
              </li>
              <li class="list-inline-item m-2">
                <i class="ti-heart text-primary"></i>
                <span class="d-block">Wishlist</span>
                <span class="h6">27</span>
              </li>
            </ul>
          </div>
          <div class="card-body border-bottom">
            <ul class="list-unstyled">
              <li class="mb-3">
                <span class="d-block">Email address:</span>
                <a class="h6" href="mailto:"><?php echo $row[email]; ?></a>
              </li>
              <!-- <li class="mb-3">
                <span class="d-block">Phone:</span>
                <a class="h6" href="mailto:">+91 654 784 547</a>
              </li>
              <li class="mb-3">
                <span class="d-block">Location:</span>
                <a class="h6" href="mailto:">South Street, London, UK</a>
              </li> -->
            </ul>
          </div>
          <div class="card-footer">
           <p>
             Social Profile:
           </p>
           <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a href="#" class="btn btn-outline-facebook iconbox iconbox-sm">
                <i class="ti-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-outline-twitter iconbox iconbox-sm">
                <i class="ti-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-outline-google-plus iconbox iconbox-sm">
                <i class="ti-google"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-outline-linkedin iconbox iconbox-sm">
                <i class="ti-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- END col-md-4 -->
    <div class="col-lg-8 mt-4">
      <div class="card padding-30 shadow-v1">
        <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
         <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
           <i class="ti-download mr-1"></i>
           Purchase Courses
         </a>
       </li>
       <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Tabs_1-2" role="tab" aria-selected="true">
         <i class="ti-heart mr-1"></i>
         Wishlist
       </a>
     </li>
   </ul>

   <div class="tab-content">
    <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
      <div class="table-responsive my-4">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Enrollment Id</th>
              <th scope="col">Date Purchased on</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="text-dark font-weight-semiBold"><?php echo $row1[enroll_id]; ?></th>
              <td><?php echo $row1[enroll_date]; ?></td>
              <td>₹<?php echo $row1[fees]; ?></td>
              <td>
                <a href="#" class="btn btn-link">View</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> <!-- END tab-pane -->
    <div class="tab-pane fade" id="Tabs_1-2" role="tabpanel">
      <div class="row">
        <div class="col-md-6 mt-4">
          <a href="page-course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border">
           <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span>
           <img class="card-img-top" src="assets/img/360x220/1.jpg" alt="">
           <div class="card-body">
            <h4 class="h5">
              The Web Developer Bootcamp
            </h4>
            <p class="my-3">
              <i class="ti-user mr-2"></i>
              Andrew Mead
            </p>
            <p class="mb-0">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </p>
          </div>
          <div class="card-footer media align-items-center justify-content-between">
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <i class="ti-headphone small mr-2"></i>
                46 lectures
              </li>
              <li class="mb-1">
                <i class="ti-time small mr-2"></i>
                27.5 hours
              </li>
            </ul>
            <h4 class="h5">
              <span class="text-primary">$180</span>
            </h4>
          </div>
        </a>
      </div>
      <div class="col-md-6 mt-4">
        <a href="page-course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border">            
          <img class="card-img-top" src="assets/img/360x220/2.jpg" alt="">
          <div class="card-body">
            <h4 class="h5">
              C++ Essential Training
            </h4>
            <p class="my-3">
              <i class="ti-user mr-2"></i>
              Andrew Mead, John Doe
            </p>
            <p class="mb-0">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half"></i>
              <span class="text-dark">4.9</span>
              <span>(8793)</span>
            </p>
          </div>
          <div class="card-footer media align-items-center justify-content-between">
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <i class="ti-headphone small mr-2"></i>
                46 lectures
              </li>
              <li class="mb-1">
                <i class="ti-time small mr-2"></i>
                27.5 hours
              </li>
            </ul>
            <h4 class="h5 text-right">
              <span class="text-primary d-block">$10</span>
              <s class="small">$129</s>
            </h4>
          </div>
        </a>
      </div>
      <div class="col-md-6 mt-4">
        <a href="page-course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border">
          <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
          <div class="card-body">
            <h4 class="h5">
              Programming Real-World Examples
            </h4>
            <p class="my-3">
              <i class="ti-user mr-2"></i>
              Adam Kury
            </p>
            <p class="mb-0">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span class="text-dark">3.4</span>
              <span>(7)</span>
            </p>
          </div>
          <div class="card-footer media align-items-center justify-content-between">
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <i class="ti-headphone small mr-2"></i>
                46 lectures
              </li>
              <li class="mb-1">
                <i class="ti-time small mr-2"></i>
                27.5 hours
              </li>
            </ul>
            <h4 class="h5">
              <span class="text-primary">$249</span>
            </h4>
          </div>
        </a>
      </div>
      <div class="col-md-6 mt-4">
        <a href="page-course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border shadow-v1">
          <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
          <div class="card-body">
            <h4 class="h5">
              Java 8 Essential Training
            </h4>
            <p class="my-3">
              <i class="ti-user mr-2"></i>
              Anthony Brooks
            </p>
            <p class="mb-0">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </p>
          </div>
          <div class="card-footer media align-items-center justify-content-between">
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <i class="ti-headphone small mr-2"></i>
                46 lectures
              </li>
              <li class="mb-1">
                <i class="ti-time small mr-2"></i>
                27.5 hours
              </li>
            </ul>
            <h4 class="h5">
              <span class="text-success">Free</span>
            </h4>
          </div>
        </a>
      </div>
      <div class="col-12 text-center mt-5">
        <a href="#" class="btn btn-icon btn-outline-primary">
          <i class="ti-reload mr-2"></i>
          Load More
        </a>
      </div> 
    </div> <!-- END row-->
  </div> <!-- END tab-pane -->
</div> <!-- END tab-content-->
</div> <!-- END card-->
</div> <!-- END col-md-8 -->
</div> <!--END row-->
</div> <!--END container-->
</section>





<?php






}

?>







<?php include "footer.php" ?>
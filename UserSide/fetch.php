<?php

error_reporting(1);
session_start();
$user=$_SESSION["userid"];
$connect = mysqli_connect("localhost", "root", "", "bcastuffs");
 
$output = '';
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
    SELECT * FROM course_master 
    WHERE course_name LIKE '%".$search."%'
    ";
}
else
{
    $query = "
    SELECT * FROM course_master ORDER BY course_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    $output .= '<div class="container">
    <div class="row">
    ';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
        <div class="col-lg-4 col-md-6 marginTop-30">
        <div href="page-course-details.html" class="card height-100p text-gray shadow-v1">
        <img class="card-img-top" style="width: 400px; height: 150px;" src="assets/courseImages/'.$row[3].'" alt="">
        <div class="card-body">
        <span class="badge position-absolute top-0 bg-success text-white" data-offset-top="-13">
        Best selling
        </span>
        <a href="course_page.php?cid='.$row[0].'" class="h5">
        '. $row[1].'
        </a>
        <!-- <p class="my-3">
        <i class="ti-user mr-2"></i>
        Andrew Mead
        </p> -->
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
        <h4 class="h5 text-right">
        <span class="text-primary">₹180</span><br>
       <div id="buy">
        <a href="checkout.php?cid='. $row[0].'&fees='. $row[2].'&userid='. $user.'"  class="btn btn-primary buy">BUY</a>
        </div>
        </h4>
        </div>
        </div>
        </div>
        ';
    }
    $output .= '</div>
    </div>';
    echo $output;
}
else
{
    echo 'Data Not Found';
}
?>
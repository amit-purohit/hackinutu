<?php
  include "header.php"
?>



<div class="padding-y-80 bg-cover" data-dark-overlay="6" style="background:url(assets/img/1920/658_2.jpg) no-repeat">
  <div class="container">
    <h2 class="text-white">
      Faculty
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Page</a></li>
      <li class="breadcrumb-item">Faculty</li>
    </ol>
  </div>
</div>
   
      
   
   
   
<section class="paddingTop-50 paddingBottom-100 bg-light">
  <div class="container">
    <div class="row">
     <?php
        include "connection.php";

        $sql = "select * from instructor_master";
        $execute = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($execute))
        {
      ?>
      <div class="col-lg-4 col-md-6 marginTop-30">
        <div class="card height-100p shadow-v1">
          <img class="card-img-top " src="./facultyImages/<?php echo $row['pic']; ?>" alt="" style="height: 384px; width: 350px;">
          <div class="card-body">
           <!-- <a href="#" class="h4">
             Faculty of Psychology
           </a> -->
           <ul class="list-unstyled mt-4 mb-0">
            <li>Name: <span class="font-weight-semiBold"><?php echo  $row['instructor_name']; ?></span></li>
            <li>Course: <span class="font-weight-semiBold"><?php echo  $row['course']; ?></span></li>
           <!--  <li>Lecturers: <span class="font-weight-semiBold">38</span></li>
            <li>Students: <span class="font-weight-semiBold">80</span></li> -->
          </ul>
        </div>
      </div>
    </div>
      
      <?php    
        }

     
     ?>
      
     
      
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
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
   
   
   
   


<?php include "footer.php" ?>
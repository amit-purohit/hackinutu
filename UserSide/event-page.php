<?php
  include "header.php";  
?>

<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat">
  <div class="container">
    <h1 class="text-white">
      Events
    </h1>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item">Events</li>
    </ol>
  </div>
</div>
    
   
   
   
<section class="padding-y-60 bg-light">
  <div class="container">
   
   <!--  <div class="list-card align-items-center shadow-v2 px-3">
      <div class="col-lg-4 py-4">
        <img class="w-100" src="assets/img/384x320/1.jpg" alt="">
      </div>
      <div class="col-lg-8 py-4">
        <a href="#" class="h4">
          Educati Upcoming Event 2018
        </a>
        <ul class="list-inline text-gray mt-3">
          <li class="list-inline-item mr-2">
           <i class="ti-time text-primary mr-1"></i>
            January 25-30, 2018
          </li>
          <li class="list-inline-item mr-2">
           <i class="ti-location-pin text-primary mr-1"></i>
            London, UK
          </li>
        </ul>
        
        <p>
          Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adipi sicing eiusmod tempor.
        </p>
        
      <ul class="list-inline mt-4" data-countdown="2019/01/01">
          <li class="list-inline-item iconbox iconbox-xxxl border border-light mb-2">
              <h2 class="countdown-days mb-0 text-primary"></h2>
              <span>Days</span>
          </li>
          <li class="list-inline-item iconbox iconbox-xxxl border border-light mb-2">
              <h2 class="countdown-hours mb-0 text-primary"></h2>
              <span>Hours</span>
          </li>
          <li class="list-inline-item iconbox iconbox-xxxl border border-light mb-2">
              <h2 class="countdown-minutes mb-0 text-primary"></h2>
              <span>Minutes</span>
          </li>
          <li class="list-inline-item iconbox iconbox-xxxl border border-light mb-2">
              <h2 class="countdown-seconds mb-0 text-primary"></h2>
              <span>Second</span>
          </li>
      </ul>
      </div>
    </div>  --><!-- END card-list-->
    
    <div class="row">
      <?php 
      include 'connection.php';
            $sql = "select * from event_master";
            $query = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($query))
            {
              echo '

                     <div class="col-md-4 mt-4">
                            <div class="card">
                              <img class="card-img-top" src="assets/img/360x220/'.$row['event_pic'].'" style="width:360px ; height:220px ;" alt="">
                              <div class="card-body">
                                <h4 class="h5">
                                 <a href="'. $row['url'] .'" target="_blank">'.$row['event_name'].'</a>
                               </h4>
                               <ul class="list-unstyled my-4 line-height-xl">
                                <li>
                                 <i class="ti-time mr-2 text-primary"></i>
                                 '.$row['event_date'].'
                               </li>
                               <li>
                                 <i class="ti-location-pin mr-2 text-primary"></i>
                                 '.$row['event_place'].'
                               </li>
                             </ul>
                               <!-- <a href="#" class="text-primary">
                                View Details
                                <i class="ti-angle-double-right small"></i>
                              </a> -->
                            </div>
                          </div>
                        </div> <!-- END col-md-4-->
              ';
            }

      ?>
      
      <div class="col-12 marginTop-80">
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


<?php
    include "footer.php";
?>
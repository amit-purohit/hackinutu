<?php
  include "header.php"
?>

   
   
     <!-- Page breadcrumb -->
    <div class="padding-y-50 bg-light-v5">
      <div class="container">
       <div class="row align-items-center">
         <div class="col-md-6">
           <h2>Countdown</h2>
         </div>
         <div class="col-md-6">
          <ol class="breadcrumb breadcrumb-double-angle justify-content-md-end bg-transparent">  
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li> 
            <li class="breadcrumb-item">
              <a href="#"> page</a>
            </li>
            <li class="breadcrumb-item">
              Countdown
            </li>
          </ol>
         </div>
       </div>
      </div>
    </div>
  <!-- END page breadcrumb-->

   
   
   
   <section class="padding-y-150">
     <div class="container">
                <div class="row align-items-center height-100p py-4">
           <div class="col-lg-10 mx-auto">
           <div class="card-deck text-center" data-countdown="2019/01/01">
            <div class="card p-4">
              <h2 class="countdown-days display-4"></h2>
              <span>Days</span>
            </div>
            <div class="card p-4">
              <h2 class="countdown-hours display-4"></h2>
              <span>Hours</span>
            </div>
            <div class="card p-4">
              <h2 class="countdown-minutes display-4"></h2>
              <span>Minutes</span>
            </div>
            <div class="card p-4">
              <h2 class="countdown-seconds display-4"></h2>
              <span>Seconds</span>
            </div>
          </div>
           </div>
         </div>

     </div>
   </section>
   
   


   
   
   
   
   
<?php include "footer.php" ?>
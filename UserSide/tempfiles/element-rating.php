<?php
  include "header.php"
?>

    

<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>Rating</h2>
     </div>
     <div class="col-md-6">
      <ol class="breadcrumb justify-content-md-end bg-transparent">  
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li> 
        <li class="breadcrumb-item">
          <a href="#"> Elements</a>
        </li>
        <li class="breadcrumb-item">
          Rating
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>



   
 <section class="padding-y-100 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-5 text-center">
        <h4>Rating - <span class="text-primary">01</span></h4>
      </div>
     <div class="col-md-6 my-2">
      <h4 class="mb-5">
        Default raing
      </h4>
       <ul class="list-unstyled ec-rating" data-state-class="text-primary">

          <li class="text-primary active">
            <i class="fas fa-star"></i>
          </li>
         
          <li>
            <i class="fas fa-star"></i>
          </li>
          <li>
            <i class="fas fa-star"></i>
          </li>
          
          <li>
            <i class="fas fa-star"></i>
          </li>
          
          <li>
            <i class="fas fa-star"></i>
          </li>
       </ul>
     </div>
     
     <div class="col-md-6 my-2">
      <h4 class="mb-5">
        Rating with tooltip
      </h4>
       <ul class="list-unstyled ec-rating" data-state-class="text-primary">
         
          <li class="text-primary active"
            data-container="body"
            data-toggle="tooltip"
            data-placement="top"
            data-skin="light"
            title="Very bad">
            <i class="fas fa-star"></i>
          </li>
         
          <li class="text-primary active"
            data-container="body"
            data-toggle="tooltip"
            data-placement="top"
            data-skin="light"
            title="bad">
            <i class="fas fa-star"></i>
          </li>
          <li data-container="body"
            data-toggle="tooltip"
            data-placement="top"
            data-skin="light"
            title="Neutral">
            <i class="fas fa-star"></i>
          </li>
          
          <li data-container="body"
            data-toggle="tooltip"
            data-placement="top"
            data-skin="light"
            title="Good">
            <i class="fas fa-star"></i>
          </li>
          
          <li data-container="body"
            data-toggle="tooltip"
            data-placement="top"
            data-skin="light"
            title="Excellent">
            <i class="fas fa-star"></i>
          </li>
       </ul>
     </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END section-->



   
 <section class="padding-y-100 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-5 text-center">
        <h4>Rating - <span class="text-primary">02</span></h4>
      </div>
      <div class="col-md-6 my-4">
      <h4 class="mb-5">
        Color variant
      </h4>
       <ul class="list-unstyled mb-4 ec-rating" data-state-class="text-primary">

          <li class="text-primary active">
            <i class="fas fa-thumbs-up"></i>
          </li>
         
          <li>
            <i class="fas fa-thumbs-up"></i>
          </li>
          <li>
            <i class="fas fa-thumbs-up"></i>
          </li>
          
          <li>
            <i class="fas fa-thumbs-up"></i>
          </li>
          
          <li>
            <i class="fas fa-thumbs-up"></i>
          </li>
       </ul>
       
       <ul class="list-unstyled mb-4 ec-rating" data-state-class="text-success">

          <li class="text-success active">
            <i class="fas fa-trophy"></i>
          </li>
         
          <li class="text-success active">
            <i class="fas fa-trophy"></i>
          </li>
          <li>
            <i class="fas fa-trophy"></i>
          </li>
          
          <li>
            <i class="fas fa-trophy"></i>
          </li>
          
          <li>
            <i class="fas fa-trophy"></i>
          </li>
       </ul>
       <ul class="list-unstyled mb-4 ec-rating" data-state-class="text-info">

          <li class="text-info active">
            <i class="fas fa-star"></i>
          </li>
         
          <li class="text-info active">
            <i class="fas fa-star"></i>
          </li>
          <li class="text-info active">
            <i class="fas fa-star"></i>
          </li>
          
          <li>
            <i class="fas fa-star"></i>
          </li>
          
          <li>
            <i class="fas fa-star"></i>
          </li>
       </ul>
       
       <ul class="list-unstyled mb-4 ec-rating" data-state-class="text-warning">

          <li class="text-warning active">
            <i class="fas fa-smile"></i>
          </li>
         
          <li class="text-warning active">
            <i class="fas fa-smile"></i>
          </li>
          <li class="text-warning active">
            <i class="fas fa-smile"></i>
          </li>
          
          <li class="text-warning active">
            <i class="fas fa-smile"></i>
          </li>
          
          <li>
            <i class="fas fa-smile"></i>
          </li>
       </ul>
     </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END section-->

    
    

   
<?php include "footer.php" ?>
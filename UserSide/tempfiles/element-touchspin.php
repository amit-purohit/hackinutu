<?php
  include "header.php"
?>

    
    

    

<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>Touchspin</h2>
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
          Touchspin
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>

   
   
   
 
<section class="padding-y-150 border-bottom border-light">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center">
       <h4>Touchspin - <span class="text-primary">01</span></h4>
     </div>
    </div>
    <div class="row mt-5 ">
     
      <div class="col-4">
      <div class="input-group ec-touchspin">
        <div class="ec-touchspin__minus input-group-prepend">
          <span class="input-group-text ti ti-minus bg-white"></span>
        </div>
        <input class="ec-touchspin__result form-control bg-white text-center" type="text" value="7">
        <div class="input-group-append">
          <span class="ec-touchspin__plus input-group-text ti-plus bg-white"></span>
        </div>
      </div>
      </div>
      
      <div class="col-4">
      <div class="input-group ec-touchspin">
        <div class="input-group-prepend">
          <span class="ec-touchspin__minus input-group-text ti ti-minus bg-white"></span>
           <span class="input-group-text">$</span>
        </div>
        <input class="ec-touchspin__result form-control bg-white" type="text" value="0">
        <div class="input-group-append">
          <span class="ec-touchspin__plus input-group-text ti-plus bg-white"></span>
        </div>
      </div>
      </div>
      
      <div class="col-4">
      <div class="input-group ec-touchspin">
        <div class="ec-touchspin__minus input-group-prepend">
          <span class="input-group-text ti ti-minus bg-white"></span>
        </div>
        <input class="ec-touchspin__result form-control bg-white text-center" type="text" value="17">
        <div class="input-group-append">
          <span class="input-group-text">$</span>
          <span class="ec-touchspin__plus input-group-text ti-plus bg-white"></span>
        </div>
      </div>
      </div>
      
    </div> <!-- END row-->
    
    <div class="row mt-5 ">
     
      <div class="col-4">
      <div class="input-group ec-touchspin">
       <div class="input-group-prepend">
        <button class="btn btn-primary ec-touchspin__minus">
          <i class="ti-minus"></i>
        </button>
       </div>        
        <input class="ec-touchspin__result form-control bg-white text-center" type="text" value="5">
        <div class="input-group-append">
          <button class="btn btn-primary ec-touchspin__plus">
            <i class="ti-plus"></i>
          </button>
        </div>
      </div>
      </div>
      
      <div class="col-4">
      <div class="input-group ec-touchspin">
        <input class="ec-touchspin__result form-control bg-white text-center border-light" type="text" value="8">
        <div class="input-group-append">
          <span class="input-group-text border-light bg-white d-block">
            <i class="ec-touchspin__plus ti-angle-up small d-block mb-1"></i>
            <i class="ec-touchspin__minus ti-angle-down small d-block"></i>
          </span>
        </div>
      </div>
      </div>
      
      <div class="col-4">
      <div class="input-group ec-touchspin">
        <input class="ec-touchspin__result form-control bg-white text-center rounded-0" type="text" value="7">
        <div class="input-group-append">
          <span class="ec-touchspin__minus input-group-text ti ti-minus bg-white"></span>
          <span class="ec-touchspin__plus input-group-text ti-plus bg-white"></span>
        </div>
      </div>
      </div>
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END section -->


   
   
<?php include "footer.php" ?>
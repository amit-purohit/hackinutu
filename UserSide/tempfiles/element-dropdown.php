<?php
  include "header.php"
?>



<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>Dropdowns</h2>
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
          Dropdowns
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>  



   
   
   
<section class="padding-y-100 border-bottom border-light wow fadeIn">
  <div class="container">
   <div class="row">
     <div class="col-12 text-center mb-5">
       <h4>
         Dropdowns Default
       </h4>
     </div>
   </div> <!-- END row-->
    <div class="row align-items-center">     
     <div class="col-md-3 my-2">
        <div class="dropdown">
           <a href="#" class="dropdown-toggle p-2" data-toggle="dropdown">Default</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">
             <i class="ti-settings mr-2"></i>
             <span>Action 3</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-lock mr-2"></i>
             <span>Another action</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-bell mr-2"></i>
             <span>Something else here</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-layers mr-2"></i>
             <span>Anything else</span>
            </a>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
             <i class="ti-thumb-up mr-2"></i>
             <span>Cool, Support Divider</span>
            </a>
          </div>
        </div>
     </div>
     <div class="col-md-3 my-2">
        <div class="dropdown" data-dropdown-event="hover">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">On hover</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">
             <i class="ti-settings mr-2"></i>
             <span>Action 3</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-lock mr-2"></i>
             <span>Another action</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-bell mr-2"></i>
             <span>Something else here</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-layers mr-2"></i>
             <span>Anything else</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
             <i class="ti-thumb-up mr-2"></i>
             <span>Cool, Support Divider</span>
            </a>
          </div>
        </div>
     </div>
     <div class="col-md-3 my-2">
        <div class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Content</a>
          <div class="dropdown-menu p-4 u-w-300">
           <h6>
             Hello from dropdown <i class="far fa-smile text-primary"></i> 
           </h6>
           <p class="mb-0">
             Nunc placerat mi id nisi interdm they mtolis. Praesient is haretra justo ught scel erisque placer.
           </p>
          </div>
        </div>
     </div>
     <div class="col-md-3 my-2">
        <div class="dropdown">
           <a href="#" class="dropdown-toggle no-caret" data-toggle="dropdown">No caret</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">
             <i class="ti-settings mr-2"></i>
             <span>Action 3</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-lock mr-2"></i>
             <span>Another action</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-bell mr-2"></i>
             <span>Something else here</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-layers mr-2"></i>
             <span>Anything else</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
             <i class="ti-thumb-up mr-2"></i>
             <span>Cool, Support Divider</span>
            </a>
          </div>
        </div>
      </div>
   </div> <!-- END row-->
  </div> <!-- END container-->
</section>



   
   
   
<section class="padding-y-100 border-bottom border-light wow fadeIn">
  <div class="container">
   <div class="row">
     <div class="col-12 text-center mb-5">
       <h4>
          Dropdown Positioning
       </h4>
     </div>
   </div> <!-- END row-->
    <div class="row align-items-center">     
     <div class="col-6 col-md-3 my-2">
        <div class="dropdown">
           <a href="#" class="dropdown-toggle p-2" data-toggle="dropdown">Bottom</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">
             <i class="ti-settings mr-2"></i>
             <span>Action 3</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-lock mr-2"></i>
             <span>Another action</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-bell mr-2"></i>
             <span>Something else here</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-layers mr-2"></i>
             <span>Anything else</span>
            </a>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
             <i class="ti-thumb-up mr-2"></i>
             <span>Cool, Support Divider</span>
            </a>
          </div>
        </div>
     </div>
     
     <div class="col-6 col-md-3 my-2">
        <div class="dropup">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top</a>
          <div class="dropdown-menu p-4 u-w-300">
           <h6>
             Hello from dropdown :) 
           </h6>
           <p class="mb-0">
             Nunc placerat mi id nisi interdm they mtolis. Praesient is haretra justo ught scel erisque placer.
           </p>
          </div>
        </div>
     </div>
     
      <div class="col-6 col-md-3 my-2">
        <div class="dropright">
           <a href="#" class="dropdown-toggle p-2" data-toggle="dropdown">Right</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">
             <i class="ti-settings mr-2"></i>
             <span>Action 3</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-lock mr-2"></i>
             <span>Another action</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-bell mr-2"></i>
             <span>Something else here</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-layers mr-2"></i>
             <span>Anything else</span>
            </a>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
             <i class="ti-thumb-up mr-2"></i>
             <span>Cool, Support Divider</span>
            </a>
          </div>
        </div>
     </div>
    
     <div class="col-6 col-md-3 my-2">
        <div class="dropleft">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Left</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">
             <i class="ti-settings mr-2"></i>
             <span>Action 3</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-lock mr-2"></i>
             <span>Another action</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-bell mr-2"></i>
             <span>Something else here</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-layers mr-2"></i>
             <span>Anything else</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
             <i class="ti-thumb-up mr-2"></i>
             <span>Cool, Support Divider</span>
            </a>
          </div>
        </div>
     </div>
   </div> <!-- END row-->
  </div> <!-- END container-->
</section>



   
   
   
<section class="paddingTop-100 paddingBottom-200 wow fadeIn">
  <div class="container">
   <div class="row">
     <div class="col-12 text-center mb-5">
       <h4>
          Nested Dropdown
       </h4>
     </div>
   </div> <!-- END row-->
    <div class="row align-items-center">     
     <div class="col-md-6 my-2">
        <div class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span>Mike Greene</span>
             <img class="iconbox iconbox-sm mx-1" src="assets/img/avatar/4.jpg" alt="">
           </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">
             <i class="ti-user mr-2"></i>
             <span class="mr-2">
               My profile
             </span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-email mr-2"></i>
             <span class="mr-2">Message</span>
             <span class="badge badge-success ml-auto">78</span>
            </a>
            <a class="dropdown-item" href="#">
             <i class="ti-settings mr-2"></i>
             <span class="mr-2">Another Action</span>
             <span class="badge badge-success ml-auto">27</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
             <i class="ti-back-left mr-2"></i>
             <span class="mr-2">Logout</span>
            </a>
          </div>
        </div>
     </div>
   </div> <!-- END row-->
  </div> <!-- END container-->
</section>

   
   
   
 

    
<?php include "footer.php" ?>
<?php
  include "header.php"
?>

   


<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>Alerts</h2>
     </div>
     <div class="col-md-6">
      <ol class="breadcrumb breadcrumb-single-angle justify-content-md-end bg-transparent">  
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li> 
        <li class="breadcrumb-item">
          <a href="#"> Elements</a>
        </li>
        <li class="breadcrumb-item">
          Alert
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>







<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h4>Basic Contextual Alerts</h4>
      </div>
      <div class="col-lg-8 mx-auto">
          <div class="alert bg-light-v2 px-4 py-3" role="alert">
            <strong> Hello World!</strong> This is default alert message box style.
          </div>
          <div class="alert bg-primary text-white px-4 py-3" role="alert">
            <strong> Hello World!</strong> This is default alert message box style.
          </div>
          <div class="alert bg-success text-white px-4 py-3" role="alert">
            <strong> Well done!</strong> You successfully read this important alert message.
          </div>
          <div class="alert bg-info text-white px-4 py-3" role="alert">
            <strong> Heads up!</strong> This alert needs your attention, but it's not super important.
          </div>
          <div class="alert bg-warning text-white px-4 py-3" role="alert">
            <strong> Warning!</strong> Better check yourself, you're not looking too good.
          </div>
          <div class="alert bg-danger text-white px-4 py-3" role="alert">
            <strong> Oh snap!</strong> Changae a few things up and try submitting again.
          </div>
      </div> <!-- END col-lg-8-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>






<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h4>Dismissible Alerts</h4>
      </div>
      <div class="col-lg-8 mx-auto">

        <div class="alert bg-light-v2 px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Hello World!</strong> This is default alert message box style.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert bg-primary text-white px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Hello World!</strong> This is default alert message box style.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert bg-success text-white px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Well done!</strong> You successfully read this important alert message.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert bg-info text-white px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Heads up!</strong> This alert needs your attention, but it's not super important.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert bg-warning text-white px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Warning!</strong> Better check yourself, you're not looking too good.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert bg-danger text-white px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Oh snap!</strong> Changae a few things up and try submitting again.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert">
            <i class="ti-close"></i>
          </button>
        </div>
      </div> <!-- END col-lg-8-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>





<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h4>Outline Style Alerts</h4>
      </div>
      <div class="col-lg-8 mx-auto">
        <div class="alert border border-light px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Hello World!</strong> This is default alert message box style.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert border border-primary text-primary px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Hello World!</strong> This is default alert message box style.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert border border-success text-success px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Well done!</strong> You successfully read this important alert message.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert border border-info text-info px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Heads up!</strong> This alert needs your attention, but it's not super important.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert border border-warning text-warning px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Warning!</strong> Better check yourself, you're not looking too good.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert border border-danger text-danger px-4 py-3 alert-dismissible fade show" role="alert">
          <strong> Oh snap!</strong> Changae a few things up and try submitting again.
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>
      </div> <!-- END col-lg-8-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>





<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
       <h4>
         Alerts with Icon
       </h4>
      </div>
      <div class="col-lg-8 mx-auto">
       
        <div class="alert bg-success text-white px-4 py-3 alert-dismissible fade show" role="alert">
          <div class="media align-items-center">
            <i class="mr-2 ti-check font-size-20"></i>
            <div class="media-body">
              <strong> Well done!</strong> You successfully read this important alert message.
            </div>
          </div>
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert bg-info text-white px-4 py-3 alert-dismissible fade show" role="alert">
          <div class="media align-items-center">
            <i class="mr-2 ti-bell font-size-20"></i>
            <div class="media-body">
              <strong> Heads up!</strong> This alert needs your attention, but it's not super important.
            </div>
          </div>
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert bg-warning text-white px-4 py-3 alert-dismissible fade show" role="alert">
          <div class="media align-items-center">
            <i class="mr-2 ti-info-alt font-size-20"></i>
            <div class="media-body">
              <strong> Warning!</strong> Better check yourself, you're not looking too good.
            </div>
          </div>
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert bg-danger text-white px-4 py-3 alert-dismissible fade show" role="alert">
          <div class="media align-items-center">
            <i class="mr-2 ti-alert font-size-20"></i>
            <div class="media-body">
              <strong> Oh snap!</strong> Changae a few things up and try submitting again.
            </div>
          </div>
          <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>          
      </div> <!-- END col-lg-8-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>





<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
       <h4>
         Alerts with Icon
       </h4>
      </div>
      <div class="col-lg-8 mx-auto">
         
          <div class="alert border border-success text-success bg-success-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
            <div class="media align-items-center">
              <i class="mr-2 ti-check font-size-20"></i>
              <div class="media-body">
                <strong> Well done!</strong> You successfully read this important alert message.
              </div>
            </div>
            <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
              <i class="ti-close"></i>
            </button>
          </div>
          
          <div class="alert border border-info text-info bg-info-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
            <div class="media align-items-center">
              <i class="mr-2 ti-bell font-size-20"></i>
              <div class="media-body">
                <strong> Heads up!</strong> This alert needs your attention, but it's not super important.
              </div>
            </div>
            <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
              <i class="ti-close"></i>
            </button>
          </div>
          
          <div class="alert border border-warning text-warning bg-warning-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
            <div class="media align-items-center">
              <i class="mr-2 ti-info-alt font-size-20"></i>
              <div class="media-body">
                <strong> Warning!</strong> Better check yourself, you're not looking too good.
              </div>
            </div>
            <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
              <i class="ti-close"></i>
            </button>
          </div>
          
          <div class="alert border border-danger text-danger bg-danger-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
            <div class="media align-items-center">
              <i class="mr-2 ti-alert font-size-20"></i>
              <div class="media-body">
                <strong> Oh snap!</strong> Changae a few things up and try submitting again.
              </div>
            </div>
            <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert" aria-label="Close">
              <i class="ti-close"></i>
            </button>
          </div>          
          
      </div> <!-- END col-lg-8-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>






<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
       <h4>
         Alerts with link
       </h4>
      </div>
      <div class="col-lg-8 mx-auto">
        <div class="alert text-success bg-success-0_1 px-4 py-3" role="alert">
          <strong> Well done!</strong> You successfully read this important <a href="#" class="alert-link">alert message.</a>
        </div>

        <div class="alert text-info bg-info-0_1 px-4 py-3" role="alert">
          <strong> Heads up!</strong> This alert <a href="#" class="alert-link">needs your attention,</a> but it's not super important.
        </div>

        <div class="alert text-warning bg-warning-0_1 px-4 py-3" role="alert">
          <strong> Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good.</a>
        </div>

        <div class="alert text-danger bg-danger-0_1 px-4 py-3" role="alert">
          <strong> Oh snap!</strong> <a href="#" class="alert-link">Changae a few things</a> up and try submitting again.
        </div>
      </div> <!-- END col-lg-8-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>






<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
       <h4>
         Alerts with avatar
       </h4>
      </div>
      <div class="col-lg-8 mx-auto">

        <div class="alert border border-success text-success bg-success-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
          <div class="media align-items-center">
            <img src="assets/img/avatar/1.jpg" alt="" class="iconbox iconbox-sm d-flex mr-3">
            <div class="media-body">
             <div class="d-flex justify-content-between mr-4">
               <strong>Albert Heller</strong>
               <small>2 min ago</small>
             </div>
              <p class="mb-0">
                Your friend request has been accepted.
              </p>
            </div>
          </div>
          <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert border border-info text-info bg-info-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
          <div class="media align-items-center">
            <img src="assets/img/avatar/2.jpg" alt="" class="iconbox iconbox-sm d-flex mr-3">
            <div class="media-body">
             <div class="d-flex justify-content-between mr-4">
               <strong>Albert Heller</strong>
               <small>2 min ago</small>
             </div>
              <p class="mb-0">
                Your friend request has been accepted.
              </p>
            </div>
          </div>
          <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert border border-warning text-warning bg-warning-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
          <div class="media align-items-center">
            <img src="assets/img/avatar/3.jpg" alt="" class="iconbox iconbox-sm d-flex mr-3">
            <div class="media-body">
             <div class="d-flex justify-content-between mr-4">
               <strong>Albert Heller</strong>
               <small>2 min ago</small>
             </div>
              <p class="mb-0">
                Your friend request has been accepted.
              </p>
            </div>
          </div>
          <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>        
      </div> <!-- END col-lg-8-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>







<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
       <h4>
         Alerts with iconbox
       </h4>
      </div>
      <div class="col-lg-8 mx-auto">
      
      <div class="alert text-success bg-success-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
        <div class="media align-items-center">
          <div class="iconbox iconbox-sm bg-success text-white mr-3">
            <i class="ti-heart"></i>
          </div>
          <div class="media-body">
           <div class="d-flex justify-content-between mr-4">
             <strong>Albert Heller</strong>
             <small>2 min ago</small>
           </div>
            <p class="mb-0">
              Added you as a favorite member
            </p>
          </div>
        </div>
        <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
          <i class="ti-close"></i>
        </button>
      </div>

      <div class="alert text-info bg-info-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
        <div class="media align-items-center">
          <div class="iconbox iconbox-sm bg-info text-white mr-3">
            <i class="ti-crown"></i>
          </div>
          <div class="media-body">
           <div class="d-flex justify-content-between mr-4">
             <strong>Albert Heller</strong>
             <small>2 min ago</small>
           </div>
            <p class="mb-0">
              Poke you
            </p>
          </div>
        </div>
        <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
          <i class="ti-close"></i>
        </button>
      </div>

      <div class="alert border border-success px-4 py-3 alert-dismissible fade show" role="alert">
        <div class="media align-items-center">
          <img src="assets/img/avatar/3.jpg" alt="" class="iconbox iconbox-sm rounded mr-3">
          <div class="media-body">
           <div class="d-flex justify-content-between mr-4">
             <strong>Albert Heller</strong>
             <small>2 min ago</small>
           </div>
            <p class="mb-0">
              Your friend request has been accepted.
            </p>
          </div>
        </div>
        <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
          <i class="ti-close"></i>
        </button>
      </div>

      <div class="alert border border-light px-4 py-3 alert-dismissible fade show" role="alert">
        <div class="media align-items-center">
          <div class="iconbox iconbox-sm bg-danger text-white d-flex mr-3">
            <i class="ti-settings"></i>
          </div>
          <div class="media-body">
           <div class="d-flex justify-content-between mr-4">
             <strong>Alert</strong>
             <small>2 min ago</small>
           </div>
            <p class="mb-0">
              Your account settings need to be change
            </p>
          </div>
        </div>
        <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
          <i class="ti-close"></i>
        </button>
      </div>       
      </div> <!-- END col-lg-8-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>







<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
       <h4>
         Alert with additional content
       </h4>
      </div>
      <div class="col-lg-8 mx-auto">

        <div class="alert border border-success text-success bg-success-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
           <strong class="font-size-20 d-block mb-3">
             <i class="ti-check mr-2"></i> Well done!
           </strong>
            <p>
              Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
          <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert border border-info text-info bg-info-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
           <strong class="font-size-20 d-block mb-3">
             <i class="ti-bell mr-2"></i> Heads up!
           </strong>
            <p>
              Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
          <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert border border-warning text-warning bg-warning-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
           <strong class="font-size-20 d-block mb-3">
             <i class="ti-info-alt mr-2"></i> Warning!
           </strong>
            <p>
              Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
          <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>

        <div class="alert border border-danger text-danger bg-danger-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
           <strong class="font-size-20 d-block mb-3">
             <i class="ti-alert mr-2"></i> Oh snap!
           </strong>
            <p>
              Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
          <button type="button" class="close font-size-14" data-dismiss="alert" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>        
      </div> <!-- END col-lg-8-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>







<section class="paddingTop-80 paddingBottom-120 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
       <h4>
         Alert additional content with button
       </h4>
      </div>
      <div class="col-lg-8 mx-auto">

        <div class="alert border border-success text-success bg-success-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
         <strong class="font-size-20 d-block mb-3">
           <i class="ti-check mr-2"></i> Well done!
         </strong>
          <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
          </p>
          <button class="btn btn-danger btn-sm" data-dismiss="alert" aria-label="Close">Dismiss</button>
          <a href="#" class="btn btn-success btn-sm">Fix Now</a>
        </div>

        <div class="alert border border-info text-info bg-info-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
         <strong class="font-size-20 d-block mb-3">
           <i class="ti-check mr-2"></i> Well done!
         </strong>
          <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
          </p>
          <button class="btn btn-danger btn-sm" data-dismiss="alert" aria-label="Close">Dismiss</button>
          <a href="#" class="btn btn-success btn-sm">Fix Now</a>
        </div>

        <div class="alert border border-warning bg-warning-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
         <strong class="font-size-20 d-block mb-3">
           <i class="ti-check mr-2"></i> Well done!
         </strong>
          <p>
            Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
          </p>
          <button class="btn btn-danger btn-sm" data-dismiss="alert" aria-label="Close">Dismiss</button>
          <a href="#" class="btn btn-success btn-sm">Fix Now</a>
        </div>

      </div> <!-- END col-lg-8-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>




<?php include "footer.php" ?>
  


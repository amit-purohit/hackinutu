<?php
  include "header.php"
?>

    


<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>Modal</h2>
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
          Modal
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>  



   
   
   
<section class="padding-y-100 border-bottom border-light wow fadeIn">
  <div class="container">
    <div class="row">
      <div class="col-md-3 mt-5">
       <h4 class="mb-4 h6">Default modal</h4>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal__Default">Launch modal</button>
      </div>
      <div class="col-md-3 mt-5">
       <h4 class="mb-4 h6">Scrolling long modal</h4>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal__Scrolling-long">Launch modal</button>
      </div>
      <div class="col-md-3 mt-5">
       <h4 class="mb-4 h6">Vertically centered</h4>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal__Vertically-centered">Launch modal</button>
      </div>
      <div class="col-md-3 mt-5">
        <h4 class="mb-4 h6">Tooltips and popovers</h4>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal__Tooltips-popovers">Launch modal</button>
      </div>
      <div class="col-md-3 mt-5">
         <h4 class="mb-4 h6">Modal large</h4>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal__large">Launch modal</button>
      </div>
      <div class="col-md-3 mt-5">
         <h4 class="mb-4 h6">Modal small</h4>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal__small">Launch modal</button>
      </div>
      <div class="col-md-3 mt-5">
         <h4 class="mb-4 h6">Modal flat</h4>
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal__flat">Launch modal</button>
      </div>
    </div>
  </div> <!-- END container-->
</section>


<!-- Modal default-->
<div class="modal fade" id="modal__Default" tabindex="-1" role="dialog" aria-labelledby="modal__Default" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="ti-close font-size-14"></i>
        </button>
      </div>
      <div class="modal-body py-4">
        Modal body text goes here.
      </div>
      <div class="modal-footer py-4">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Scrolling long-->
<div class="modal fade" id="modal__Scrolling-long" tabindex="-1" role="dialog" aria-labelledby="modal__Scrolling-long" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="ti-close font-size-14"></i>
        </button>
      </div>
      <div class="modal-body py-4">
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </div>
      <div class="modal-footer py-4">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal default-->
<div class="modal fade" id="modal__Vertically-centered" tabindex="-1" role="dialog" aria-labelledby="modal__Vertically-centered" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="ti-close font-size-14"></i>
        </button>
      </div>
      <div class="modal-body py-4">
        Modal body text goes here.
      </div>
      <div class="modal-footer py-4">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
 

<!-- Modal Tooltips popovers-->
<div class="modal fade" id="modal__Tooltips-popovers" tabindex="-1" role="dialog" aria-labelledby="modal__Tooltips-popovers" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="ti-close font-size-14"></i>
        </button>
      </div>
      <div class="modal-body py-4">
        <h5>Popover in a modal</h5>
        <p>This 
        <button class="btn btn-success btn-sm" 
          data-container="body"
          data-toggle="popover"
          data-trigger="hover"
          title="Cool popover title"
          data-skin="dark"
          data-placement="right"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          Button
        </button>
          triggers a popover on click.</p>
        <hr>
        <h5>Tooltips in a modal</h5>
        <p>
          <a href="#" class="text-primary" title="Tooltip" data-container="body" data-toggle="tooltip" data-placement="top">This link</a>
          and 
          <a href="#" class="text-primary" title="Tooltip" data-container="body" data-toggle="tooltip" data-placement="top" data-skin="light">that link</a>
          have tooltips on hover.
         </p>
      </div>
      <div class="modal-footer py-4">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
 

<!-- Modal large-->
<div class="modal fade" id="modal__large" tabindex="-1" role="dialog" aria-labelledby="modal__large" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New message to @echotheme</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="ti-close font-size-14"></i>
        </button>
      </div>
      <div class="modal-body py-4">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" rows="5" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer py-4">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
 

<!-- Modal small-->
<div class="modal fade" id="modal__small" tabindex="-1" role="dialog" aria-labelledby="modal__small" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="ti-close font-size-14"></i>
        </button>
      </div>
      <div class="modal-body py-4">
        Modal body text goes here.
      </div>
      <div class="modal-footer py-4">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
 

<!-- Modal flat-->
<div class="modal fade" id="modal__flat" tabindex="-1" role="dialog" aria-labelledby="modal__flat" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body py-4">
       <p class="font-weight-semiBold"><i class="fas fa-check-circle text-success mr-2"></i> Your payment done.</p>
       <p>
         Check what is next and some text goes here
       </p>
       <div class="mt-2 text-right">
         <button class="btn btn-success btn-sm" data-dismiss="modal">Ok</button>
       </div>
      </div>
    </div>
  </div>
</div>

   
   
 

   
<?php include "footer.php" ?>
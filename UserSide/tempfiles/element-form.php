<?php
  include "header.php"
?>

   
   
   
    

<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>Form</h2>
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
          Form
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>
    
   
    
      
    
<section class="padding-y-100 border-bottom border-light">
  <div class="container">
    <ul class="nav tab-line tab-line tab-line--2x border-bottom justify-content-center mb-4" role="tablist">
     <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#form-basic" role="tab" aria-selected="true">
        Form Basic
      </a>
     </li>
     <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#form-group" role="tab" aria-selected="true">
        Form group
      </a>
     </li>
     <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#form-date-time" role="tab" aria-selected="true">
        Date time
      </a>
     </li>
     <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#form-switch" role="tab" aria-selected="true">
        Switch
      </a>
     </li>
     
    </ul>
  </div> <!-- END container-->
  
  
  <div class="tab-content">
   
    <div class="tab-pane fade show active" id="form-basic" role="tabpanel">
      <div class="padding-y-80">
        <div class="container">
          <div class="row">
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
                Basic Text Inputs
              </h4>
             <div class="form-group">
              <input type="text" class="form-control">
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-0">
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-pill">
             </div>
            </div>
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
                Input with Placeholder
              </h4>
             <div class="form-group">
              <input type="text" class="form-control" placeholder="Base input">
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-0" placeholder="Square input">
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-pill" placeholder="Pill input">
             </div>
            </div>
          </div> <!-- END row-->

          <div class="row mt-5">
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
                With label
              </h4>
             <div class="form-group">
               <label>Base label</label>
               <input type="text" class="form-control">
             </div>
             <div class="form-group">
               <label>Square label</label>
               <input type="text" class="form-control rounded-0">
             </div>
             <div class="form-group">
               <label>Pill label</label>
               <input type="text" class="form-control rounded-pill">
             </div>
            </div>
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
                Input with Help text
              </h4>
             <div class="form-group">
              <input type="text" class="form-control" placeholder="Base input">
              <small class="form-text text-muted">
                We'll never share your email with anyone else.
              </small>
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-0" placeholder="Square input">
              <small class="form-text text-muted">
                We'll never share your email with anyone else.
              </small>
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-pill" placeholder="Pill input">
              <small class="form-text text-muted">
                We'll never share your email with anyone else.
              </small>
             </div>
            </div>
          </div> <!-- END row-->

          <div class="row mt-5">
           <div class="col-md-6 my-2">
             <h4 class="mb-5">
                Input With left icon label
             </h4>
            <div class="input-group input-group--focus mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white ti-user"></span>
              </div>
              <input type="text" class="form-control border-left-0 pl-0" placeholder="Addon Default">
            </div>

             <div class="input-group input-group--focus mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text rounded-0 bg-white ti-email"></span>
              </div>
              <input type="text" class="form-control rounded-0 border-left-0 pl-0" placeholder="Addon Square">
            </div>

            <div class="input-group input-group--focus mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white rounded-left ti-credit-card"></span>
              </div>
              <input type="text" class="form-control border-left-0 rounded-right pl-0" placeholder="Addon Rounded">
            </div>

           </div>
           <div class="col-md-6 my-2">
             <h4 class="mb-5">
                Input With right icon label
             </h4>
            <div class="input-group input-group--focus mb-3">
              <input type="text" class="form-control border-right-0 pr-0" placeholder="Addon Default">
              <div class="input-group-append">
                <span class="input-group-text bg-white ti-user"></span>
              </div>
            </div>

             <div class="input-group input-group--focus mb-3">
              <input type="text" class="form-control rounded-0 border-right-0 pr-0" placeholder="Addon Square">
              <div class="input-group-append">
                <span class="input-group-text rounded-0 bg-white ti-email"></span>
              </div>
            </div>

            <div class="input-group input-group--focus mb-3">
              <input type="text" class="form-control rounded-left border-right-0 pr-0" placeholder="Addon Rounded">
              <div class="input-group-append">
                <span class="input-group-text rounded-right bg-white ti-credit-card"></span>
              </div>
            </div>

           </div>
          </div> <!-- END row-->

           <div class="row mt-5">
             <div class="col-md-6 my-2">
               <h4 class="mb-5">
                  Addon icon
               </h4>
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text ti-user bg-white"></span>
                </div>
                <input type="text" class="form-control" placeholder="Addon Default">
              </div>

               <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text rounded-0 bg-white ti-email"></span>
                </div>
                <input type="text" class="form-control rounded-0" placeholder="Addon Square">
              </div>

               <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text rounded-left bg-white ti-credit-card"></span>
                </div>
                <input type="text" class="form-control rounded-right" placeholder="Addon Pill">
              </div>
             </div>

             <div class="col-md-6 my-2">
               <h4 class="mb-5">
                 Addon icon
               </h4>
              <div class="input-group input-group--focus mb-3">
                <input type="text" class="form-control" placeholder="Addon Default">
                <div class="input-group-append">
                  <span class="input-group-text bg-white ti-credit-card"></span>
                </div>
              </div>

               <div class="input-group input-group--focus mb-3">
                <input type="text" class="form-control rounded-0" placeholder="Addon Square">
                <div class="input-group-append">
                  <span class="input-group-text rounded-0 bg-white ti-email"></span>
                </div>
              </div>

               <div class="input-group input-group--focus mb-3">
                <input type="text" class="form-control rounded-left" placeholder="Addon Pill">
                <div class="input-group-append">
                  <span class="input-group-text rounded-right bg-white ti-user"></span>
                </div>
              </div>
             </div>
            </div> <!-- END row-->

          <div class="row mt-5">
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
                Disable input
              </h4>
             <div class="form-group">
               <input type="text" class="form-control" disabled>
             </div>
             <div class="form-group">
               <input type="text" class="form-control rounded-0" disabled>
             </div>
             <div class="form-group">
               <input type="text" class="form-control rounded-pill" disabled>
             </div>
            </div>
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
                Readonly Input Field
              </h4>
             <div class="form-group">
              <input type="text" class="form-control" placeholder="You can't change me i am readonly" readonly>
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-0" placeholder="You can't change me i am readonly" readonly>
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-pill" placeholder="You can't change me i am readonly" readonly>
             </div>
            </div>
          </div> <!-- END row-->

          <div class="row mt-5">
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
               Predefined Input Value
              </h4>
             <div class="form-group">
               <input type="text" class="form-control" value="http://">
             </div>
             <div class="form-group">
               <input type="text" class="form-control rounded-0" value="https:///">
             </div>
             <div class="form-group">
               <input type="text" class="form-control rounded-pill" value="xhttps://">
             </div>
            </div>
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
                Min and Max Value
              </h4>
             <div class="form-group">
              <input type="text" class="form-control" placeholder="Minimum 1 characters." min="1">
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-0" placeholder="Maximum 10 characters" max="10">
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-pill" placeholder="Maximum 10 characters" max="10">
             </div>
            </div>
          </div> <!-- END row-->

          <div class="row mt-5">
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
              Input solid 
              </h4>
             <div class="form-group">
               <input type="text" class="form-control input--solid" placeholder="Input Solid">
             </div>
             <div class="form-group">
               <input type="text" class="form-control rounded-0 input--solid" placeholder="Input Solid">
             </div>
             <div class="form-group">
               <input type="text" class="form-control rounded-pill input--solid" placeholder="Input Solid">
             </div>
            </div>
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
                Input Air
              </h4>
             <div class="form-group">
              <input type="text" class="form-control input--air" placeholder="Input Air">
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-0 input--air" placeholder="Input Air">
             </div>
             <div class="form-group">
              <input type="text" class="form-control rounded-pill input--air" placeholder="Input Air">
             </div>
            </div>
          </div> <!-- END row-->

          <div class="row mt-5">
            <div class="col-md-6 my-2">
            <h4>
              Textarea basic
            </h4>
             <div class="form-group">
                <textarea class="form-control"></textarea>
             </div>
             <div class="form-group">
                <textarea class="form-control rounded-0" rows="3"></textarea>
             </div>
             <div class="form-group">
                <textarea class="form-control rounded-pill" rows="5"></textarea>
             </div>
            </div>

            <div class="col-md-6 my-2">
            <h4>
              Textarea placeholder
            </h4>
             <div class="form-group">
                <textarea class="form-control" placeholder="Simple textarea"></textarea>
             </div>
             <div class="form-group">
                <textarea class="form-control rounded-0" rows="3" placeholder="Simple textarea"></textarea>
             </div>
             <div class="form-group">
                <textarea class="form-control rounded-pill" rows="5" placeholder="Simple textarea"></textarea>
             </div>
            </div>
          </div> <!-- END row-->

          <div class="row mt-5">
            <div class="col-md-6 my-2">
            <h4 class="mb-5">
              Textarea disable
            </h4>
             <div class="form-group">
                <textarea class="form-control" disabled placeholder="Disable Textarea" rows="4"></textarea>
             </div>
            </div>

            <div class="col-md-6 my-2">
            <h4 class="mb-5">
              Textarea Solid
            </h4>
             <div class="form-group">
                <textarea class="form-control input--solid" placeholder="Textarea solid" rows="4"></textarea>
             </div>
            </div>
          </div> <!-- END row-->

          <div class="row mt-5">
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
              Input Sizing 
              </h4>
             <div class="form-group">
               <input type="text" class="form-control form-control-lg" value="Input Large">
             </div>
             <div class="form-group">
               <input type="text" class="form-control rounded-0" value="Input Default">
             </div>
             <div class="form-group">
               <input type="text" class="form-control form-control-sm" value="Input small">
             </div>
            </div>
            <div class="col-md-6 my-2">
              <h4 class="mb-4">
                Input Sizing
              </h4>
             <div class="form-group">
               <input type="text" class="form-control rounded-pill form-control-lg" value="Input Large">
             </div>
             <div class="form-group">
               <input type="text" class="form-control rounded-pill" value="Input Default">
             </div>
             <div class="form-group">
               <input type="text" class="form-control rounded-pill form-control-sm" value="Input small">
             </div>
            </div>
          </div> <!-- END row-->

          <div class="row mt-5">
           <div class="col-12 text-center my-5">
             <h4>
               Textual Input Type Options
             </h4>
             <p>
               Here are examples of <code>.form-control</code> applied to each textual HTML5 <code> &lt;input&gt;</code> type.
             </p>
           </div>
            <div class="col-12 mx-auto">

              <div class="row form-group">
                <label for="example-text-input" class="col-2 col-form-label text-right">Text</label>
                <div class="col-10">
                  <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-search-input" class="col-2 col-form-label text-right">Search</label>
                <div class="col-10">
                  <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-email-input" class="col-2 col-form-label text-right">Email</label>
                <div class="col-10">
                  <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-url-input" class="col-2 col-form-label text-right">URL</label>
                <div class="col-10">
                  <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-tel-input" class="col-2 col-form-label text-right">Telephone</label>
                <div class="col-10">
                  <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-password-input" class="col-2 col-form-label text-right">Password</label>
                <div class="col-10">
                  <input class="form-control" type="password" value="hunter2" id="example-password-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-number-input" class="col-2 col-form-label text-right">Number</label>
                <div class="col-10">
                  <input class="form-control" type="number" value="42" id="example-number-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-datetime-local-input" class="col-2 col-form-label text-right">Date and time</label>
                <div class="col-10">
                  <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-date-input" class="col-2 col-form-label text-right">Date</label>
                <div class="col-10">
                  <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-month-input" class="col-2 col-form-label text-right">Month</label>
                <div class="col-10">
                  <input class="form-control" type="month" value="2011-08" id="example-month-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-week-input" class="col-2 col-form-label text-right">Week</label>
                <div class="col-10">
                  <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                </div>
              </div>

              <div class="row form-group">
                <label for="example-time-input" class="col-2 col-form-label text-right">Time</label>
                <div class="col-10">
                  <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                </div>
              </div>     

              <div class="row form-group">
                <label for="example-textarea" class="col-2 col-form-label text-right">Textarea</label>
                <div class="col-10">
                  <textarea class="form-control" rows="5"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <label for="example-color-input" class="col-2 col-form-label text-right">Color</label>
                <div class="col-10">
                  <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                </div>
              </div>

            </div>
          </div> <!-- END row-->
        </div> <!-- END container-->

      </div>
    </div>

    <div class="tab-pane fade" id="form-group" role="tabpanel">
        <div class="padding-y-80">
      <div class="container">

        <div class="row">
         <div class="col-md-6">
           <h4 class="mb-5">
             Default input group addon
           </h4>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Addon Default">
          </div>

           <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text rounded-0">https://example.com/users/</span>
            </div>
            <input type="text" class="form-control rounded-0" placeholder="Addon Square">
          </div>

           <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text rounded-left">$10</span>
            </div>
            <input type="text" class="form-control rounded-right" placeholder="Addon Pill">
          </div>
         </div>

         <div class="col-md-6">
           <h4 class="mb-5">
             Input group addon right side
           </h4>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Addon Default">
            <div class="input-group-append">
              <span class="input-group-text">@example.com</span>
            </div>
          </div>

           <div class="input-group mb-3">
            <input type="text" class="form-control rounded-0" placeholder="Addon Square">
            <div class="input-group-append">
              <span class="input-group-text rounded-0">@example.com</span>
            </div>
          </div>

           <div class="input-group mb-3">
            <input type="text" class="form-control rounded-left" placeholder="Addon Pill">
            <div class="input-group-append">
              <span class="input-group-text rounded-right">@example.com</span>
            </div>
          </div>
         </div>
        </div> <!-- END row-->

        <div class="row mt-5">

         <div class="col-md-6">
           <h4 class="mb-5">
             Textarea input group addon
           </h4>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">textarea</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" rows="3"></textarea>
          </div>
         </div>

         <div class="col-md-6">
           <h4 class="mb-5">
             Textarea input group addon
           </h4>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">textarea</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" rows="3"></textarea>
          </div>
         </div>

        </div> <!-- END row-->

        <div class="row mt-5">
         <div class="col-md-6">
           <h4 class="mb-5">
              Addon icon
           </h4>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text ti-user"></span>
            </div>
            <input type="text" class="form-control" placeholder="Addon Default">
          </div>

           <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text rounded-0 ti-email"></span>
            </div>
            <input type="text" class="form-control rounded-0" placeholder="Addon Square">
          </div>

           <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text rounded-left ti-credit-card"></span>
            </div>
            <input type="text" class="form-control rounded-right" placeholder="Addon Pill">
          </div>
         </div>

         <div class="col-md-6">
           <h4 class="mb-5">
             Addon icon
           </h4>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Addon Default">
            <div class="input-group-append">
              <span class="input-group-text ti-credit-card"></span>
            </div>
          </div>

           <div class="input-group mb-3">
            <input type="text" class="form-control rounded-0" placeholder="Addon Square">
            <div class="input-group-append">
              <span class="input-group-text rounded-0 ti-email"></span>
            </div>
          </div>

           <div class="input-group mb-3">
            <input type="text" class="form-control rounded-left" placeholder="Addon Pill">
            <div class="input-group-append">
              <span class="input-group-text rounded-right ti-user"></span>
            </div>
          </div>
         </div>
        </div> <!-- END row-->

        <div class="row mt-5">

         <div class="col-md-6">
           <h4 class="mb-5">
              Addon both side
           </h4>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text ti-user"></span>
            </div>
            <input type="text" class="form-control" placeholder="Addon Default">
            <div class="input-group-append">
              <span class="input-group-text">$10</span>
            </div>
          </div>

           <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">$10</span>
            </div>
            <input type="text" class="form-control rounded-0" placeholder="Addon Square">
            <div class="input-group-append rounded-0">
              <span class="input-group-text rounded-0 ti-email"></span>
            </div>
          </div>

           <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text rounded-left ti-credit-card"></span>
            </div>
            <input type="text" class="form-control" placeholder="Addon Pill">
            <div class="input-group-append">
              <span class="input-group-text rounded-right ti-email"></span>
            </div>
          </div>
         </div>

         <div class="col-md-6">
           <h4 class="mb-5">
              Addon both side
           </h4>
          <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white ti-user"></span>
            </div>
            <input type="text" class="form-control" placeholder="Addon Default">
            <div class="input-group-append">
              <span class="input-group-text bg-white">$10</span>
            </div>
          </div>

           <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white">$10</span>
            </div>
            <input type="text" class="form-control rounded-0" placeholder="Addon Square">
            <div class="input-group-append rounded-0">
              <span class="input-group-text bg-white rounded-0 ti-email"></span>
            </div>
          </div>

           <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white rounded-left bg-white ti-credit-card"></span>
            </div>
            <input type="text" class="form-control" placeholder="Addon Pill">
            <div class="input-group-append">
              <span class="input-group-text bg-white rounded-right ti-email"></span>
            </div>
          </div>
         </div>
        </div> <!-- END row-->

       <div class="row mt-5">

         <div class="col-md-6">
           <h4 class="mb-5">
              Buttons addons
           </h4>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-primary">Go</button>
            </div>
            <input type="text" class="form-control" placeholder="Search for...">
          </div>

           <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-primary rounded-left">Go</button>
            </div>
            <input type="text" class="form-control rounded-right" placeholder="Search for...">
          </div>
         </div>

         <div class="col-md-6">
           <h4 class="mb-5">
              Buttons addons
           </h4>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search for...">
            <div class="input-group-append">
              <button class="btn btn-outline-primary">Search</button>
            </div>
          </div>

           <div class="input-group mb-3">
            <input type="text" class="form-control rounded-left" placeholder="Search for...">
            <div class="input-group-append">
              <button class="btn btn-outline-primary rounded-right">Search</button>
            </div>
          </div>
         </div>

        </div> <!-- END row-->

       <div class="row mt-5">

         <div class="col-md-6">
           <h4 class="mb-5">
              Left Button Dropdown
           </h4>
          <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Search for...">
          </div>

           <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-outline-secondary dropdown-toggle rounded-left" type="button" data-toggle="dropdown">
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <input type="text" class="form-control rounded-right" placeholder="Search for...">
          </div>
         </div>

         <div class="col-md-6">
           <h4 class="mb-5">
             Right Button Dropdown
           </h4>
          <div class="input-group input-group--focus mb-3">
            <input type="text" class="form-control" placeholder="Search for...">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </div>

           <div class="input-group input-group--focus mb-3">
            <input type="text" class="form-control rounded-left" placeholder="Search for...">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary dropdown-toggle rounded-right" type="button" data-toggle="dropdown">
                Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </div>
         </div>

        </div> <!-- END row-->

       <div class="row mt-5">

         <div class="col-md-6">
           <h4 class="mb-5">
              Segmented buttons
           </h4>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button type="button" class="btn btn-outline-secondary">Action</button>
              <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
          </div>
         </div>

         <div class="col-md-6">
           <h4 class="mb-5">
              Segmented buttons
           </h4>
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
            <div class="input-group-append">
              <button type="button" class="btn btn-outline-secondary">Action</button>
              <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </div>
         </div>

        </div> <!-- END row-->

       <div class="row mt-5">

         <div class="col-md-6">
           <h4 class="mb-5">
             Input group select
           </h4>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-outline-secondary" type="button">Action</button>
            </div>
            <select class="form-control custom-select">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
         </div>

         <div class="col-md-6">
           <h4 class="mb-5">
              Input group select
           </h4>
          <div class="input-group mb-3">
            <select class="form-control custom-select">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">Action</button>
            </div>
          </div>
         </div>

        </div> <!-- END row-->

       <div class="row mt-5">

         <div class="col-md-6">
           <h4 class="mb-5">
             Input group with checkbox
           </h4>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
             <div class="input-group-text bg-white">
               <label class="ec-checkbox check-xs mb-0">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control mr-0"></span>
              </label>
             </div>
            </div>
            <input type="text" class="form-control" placeholder="Text input with checkbox">
          </div>
         </div>

         <div class="col-md-6">
           <h4 class="mb-5">
             Input group with radio
           </h4>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Text input with radio">
            <div class="input-group-append">
             <div class="input-group-text bg-white">
               <label class="ec-radio radio-thin check-xs mb-0">
                <input type="radio" name="checkbox">
                <span class="ec-radio__control mr-0"></span>
              </label>
             </div>
            </div>
          </div>
         </div>

        </div> <!-- END row-->

      </div> <!-- END container-->
    </div>
    </div>

    <div class="tab-pane fade" id="form-date-time" role="tabpanel">

      <div class="padding-y-80">
        <div class="container">
          <div class="row">
          <div class="col-sm-6 mt-5">
           <h4 class="mb-4">
             Date time picker
           </h4>
            <input placeholder="03/27/2018 8:09 PM" type="text" class="form-control datetimepicker-input" id="ec-datetimepicker" data-toggle="datetimepicker" data-target="#ec-datetimepicker"/>
          </div>
          <div class="col-sm-6 mt-5">
           <h4 class="mb-4">
             Only date
           </h4>
            <input placeholder="03/27/2018" type="text" class="form-control datetimepicker-input" id="ec-datepicker" data-toggle="datetimepicker" data-target="#ec-datepicker"/>
          </div>
          <div class="col-sm-6 mt-5">
            <h4 class="mb-4">
               Only time
           </h4>
            <input placeholder="8:10 PM" type="text" class="form-control datetimepicker-input" id="ec-timepicker" data-toggle="datetimepicker" data-target="#ec-timepicker"/>
          </div>
          <div class="col-sm-6 my-5">
            <h4 class="mb-4">
               Side by side view
           </h4>
            <input placeholder="03/27/2018 8:10 PM" type="text" class="form-control datetimepicker-input" id="ec-datetimepicker-sbs" data-toggle="datetimepicker" data-target="#ec-datetimepicker-sbs"/>
          </div>
          </div>
        </div> 
      </div>
  
  
    </div>

    <div class="tab-pane fade" id="form-switch" role="tabpanel">
     
      <section class="padding-y-100 border-bottom border-light">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-5 text-center">
              <h4>Switch - <span class="text-primary">01</span></h4>
            </div>
            <div class="col-12 my-4">
              <label class="ec-switch switch-primary m-3">
                <input type="checkbox" name="checkbox">
                <span class="ec-switch__control"></span>
              </label>
              <label class="ec-switch switch-primary switch-icon m-3">
                <input type="checkbox" name="checkbox">
                <span class="ec-switch__control"></span>
              </label>
              <label class="ec-switch switch-icon switch-success m-3">
                <input type="checkbox" name="checkbox">
                <span class="ec-switch__control"></span>
              </label>
              <label class="ec-switch switch-icon switch-info m-3">
                <input type="checkbox" name="checkbox">
                <span class="ec-switch__control"></span>
              </label>
              <label class="ec-switch switch-icon switch-warning m-3">
                <input type="checkbox" name="checkbox">
                <span class="ec-switch__control"></span>
              </label>
              <label class="ec-switch switch-icon switch-danger m-3">
                <input type="checkbox" name="checkbox">
                <span class="ec-switch__control"></span>
              </label>
            </div>
          </div> <!-- END row-->
        </div> <!-- END container-->
      </section> <!-- END section-->
   
    </div>

    
  </div> <!-- END tab-content-->
</section> <!-- END section-->
    
   
    

<?php include "footer.php" ?>
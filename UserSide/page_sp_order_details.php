<?php 
include 'header.php';
?>


<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/1920/658_2.jpg) no-repeat">
  <div class="container">
    <h2 class="text-white">
      Orders
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Page</a></li>
      <li class="breadcrumb-item">Orders</li>
    </ol>
  </div>
</div>
    
  
  
  
  <section class="padding-y-100 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card align-items-start shadow-v1 p-4 p-md-5">
            <h4>
              Order Details
            </h4>
            <div class="table-responsive my-4">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Product Name</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <a href="#">The Web Developer Bootcamp</a>
                      </th>
                      <td>
                        $49
                      </td>                      
                    </tr>
                    <tr>
                      <th scope="row">
                        <a href="#">Subtotal</a>
                      </th>
                      <td>
                        $49
                      </td>                      
                    </tr>
                    <tr>
                      <th scope="row">
                        <a href="#">Total</a>
                      </th>
                      <td>
                        $49
                      </td>                      
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <a href="#" class="btn btn-outline-primary">Back to profile</a>
          </div>
        </div>
      </div> <!-- END row-->
    </div> <!--END container-->
  </section>

<?php
include 'footer.php';
?>
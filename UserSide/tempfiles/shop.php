<?php
  include "header.php"
?>

    






<section class="pt-5 paddingBottom-100 bg-light-v2">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
    <div id="accordion"> 
       
        <div class="card card-body accordion-item marginTop-30">
         <a href="#acc1" class="accordion__title h6 mb-0" data-toggle="collapse" aria-expanded="true">
           Filter by Category
           <span class="accordion__icon float-right small mx-2 mt-1">
            <i class="ti-angle-down"></i>
            <i class="ti-angle-up"></i>
          </span>
         </a>
          <div id="acc1" class="collapse show" data-parent="#accordion">
           <div class="mt-4">
             <p class="mb-2">
              <label class="ec-checkbox">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">All Categories</span>
              </label>
             </p>
             <p class="mb-2">
              <label class="ec-checkbox">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">Programming</span>
              </label>
             </p>
             <p class="mb-2">
              <label class="ec-checkbox">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">English</span>
              </label>
             </p>
             <p class="mb-2">
              <label class="ec-checkbox">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">Novel</span>
              </label>
             </p>
             <p class="mb-2">
              <label class="ec-checkbox">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">Others</span>
              </label>
             </p>

           </div>
          </div>
        </div> <!-- END accordion-item--> 
       
        <div class="card card-body accordion-item marginTop-30">
         <a href="#acc2" class="accordion__title h6 mb-0 collapsed" data-toggle="collapse" aria-expanded="true">
           Filter by Author
           <span class="accordion__icon float-right small mx-2 mt-1">
            <i class="ti-angle-down"></i>
            <i class="ti-angle-up"></i>
          </span>
         </a>
          <div id="acc2" class="collapse" data-parent="#accordion">
          <div class="mt-4">
             <p class="mb-2">
              <label class="ec-checkbox">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">All Authors</span>
              </label>
             </p>
             <p class="mb-2">
              <label class="ec-checkbox">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">Michael John</span>
              </label>
             </p>
             <p class="mb-2">
              <label class="ec-checkbox">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">Thomas Rang</span>
              </label>
             </p>
             <p class="mb-2">
              <label class="ec-checkbox">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">Gigy Sayfan</span>
              </label>
             </p>
             <p class="mb-2">
              <label class="ec-checkbox">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">Daniel Brain</span>
              </label>
             </p>

           </div>
          </div>
        </div> <!-- END accordion-item--> 
       

        <div class="card card-body accordion-item marginTop-30">
         <a href="#acc3" class="accordion__title h6 mb-0 collapsed" data-toggle="collapse" aria-expanded="true">
           Filter by Price
           <span class="accordion__icon float-right small mx-2 mt-1">
            <i class="ti-angle-down"></i>
            <i class="ti-angle-up"></i>
          </span>
         </a>
          <div id="acc3" class="collapse" data-parent="#accordion">
           <div class="marginTop-80">
             <div id="rangeSlide1" class="ec-range-slider"></div>
             <div class="d-flex align-items-center mt-4">
               <input type="text" class="form-control px-2" id="noUiSliders_1_input">
               <span class="mx-2">-</span>
               <input type="text" class="form-control px-2" id="noUiSliders_1_1_input">
             </div>
           </div>
          </div>
        </div> <!-- END accordion-item--> 
        
      </div> <!-- END accordion-->

      </div> <!-- END col-md-3 -->
      
      <div class="col-md-9">
        <div class="row">
         
          <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn">
            <div class="card text-center height-100p shadow-v1">
             <span class="badge badge-pill badge-primary position-absolute top-20 left-10">-20%</span>
              <div class="card-header">
                <img class="w-100" src="assets/img/shop/products/1.jpg" alt="">
              </div>
              <div class="card-body px-3 py-0">
               <a href="shop-single.html" class="h6">Bootstrap Referance Guide</a>
               <p class="text-gray">
                 Thomas Rang
               </p>
               <div class="d-flex align-items-center justify-content-between">
                 <p class="mb-0 font-weight-semiBold">
                   <span class="text-primary">$65.45</span>
                   <span class="text-gray"><s>$80.45</s></span>
                 </p>
                <ul class="list-unstyled ec-review-rating font-size-12">
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                </ul>
               </div>
              </div>
              <div class="card-footer border-top-0">
                <button class="btn btn-outline-primary mx-1">Buy Now</button>
                <button class="btn btn-outline-light mx-1"         
                  data-container="body"
                  data-toggle="tooltip"
                  data-placement="top"
                  data-skin="light"
                  title="Add to card">
                  <i class="ti-shopping-cart"></i>
                 </button>
              </div>
            </div>
          </div>
         
          <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn">
            <div class="card text-center height-100p shadow-v1">
              <div class="card-header">
                <img class="w-100" src="assets/img/shop/products/2.jpg" alt="">
              </div>
              <div class="card-body px-3 py-0">
               <a href="shop-single.html" class="h6">Beginning C++ Through example</a>
               <p class="text-gray">
                 Micheal Dawson
               </p>
               <div class="d-flex align-items-center justify-content-between">
                 <p class="mb-0 font-weight-semiBold">
                   <span class="text-primary">$199.00</span>
                 </p>
                <ul class="list-unstyled ec-review-rating font-size-12">
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star-half-alt"></i></li>
                </ul>
               </div>
              </div>
              <div class="card-footer border-top-0">
                <button class="btn btn-outline-primary mx-1">Buy Now</button>
                <button class="btn btn-outline-light mx-1"         
                  data-container="body"
                  data-toggle="tooltip"
                  data-placement="top"
                  data-skin="light"
                  title="Add to card">
                  <i class="ti-shopping-cart"></i>
                 </button>
              </div>
            </div>
          </div>
         
          <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn">
            <div class="card text-center height-100p shadow-v1">
              <div class="card-header">
                <img class="w-100" src="assets/img/shop/products/3.jpg" alt="">
              </div>
              <div class="card-body px-3 py-0">
               <a href="shop-single.html" class="h6">The Self-Taought Programmer</a>
               <p class="text-gray">
                 Alex Lebby
               </p>
               <div class="d-flex align-items-center justify-content-between">
                 <p class="mb-0 font-weight-semiBold">
                   <span class="text-primary">$99.45</span>
                 </p>
                <ul class="list-unstyled ec-review-rating font-size-12">
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="far fa-star"></i></li>
                  <li class="active"><i class="far fa-star"></i></li>
                </ul>
               </div>
              </div>
              <div class="card-footer border-top-0">
                <button class="btn btn-outline-primary mx-1">Buy Now</button>
                <button class="btn btn-outline-light mx-1"         
                  data-container="body"
                  data-toggle="tooltip"
                  data-placement="top"
                  data-skin="light"
                  title="Add to card">
                  <i class="ti-shopping-cart"></i>
                 </button>
              </div>
            </div>
          </div>
          
         <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn">
            <div class="card text-center height-100p shadow-v1">
              <div class="card-header">
                <img class="w-100" src="assets/img/shop/products/2.jpg" alt="">
              </div>
              <div class="card-body px-3 py-0">
               <a href="shop-single.html" class="h6">Beginning C++ Through example</a>
               <p class="text-gray">
                 Micheal Dawson
               </p>
               <div class="d-flex align-items-center justify-content-between">
                 <p class="mb-0 font-weight-semiBold">
                   <span class="text-primary">$199.00</span>
                 </p>
                <ul class="list-unstyled ec-review-rating font-size-12">
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star-half-alt"></i></li>
                </ul>
               </div>
              </div>
              <div class="card-footer border-top-0">
                <button class="btn btn-outline-primary mx-1">Buy Now</button>
                <button class="btn btn-outline-light mx-1"         
                  data-container="body"
                  data-toggle="tooltip"
                  data-placement="top"
                  data-skin="light"
                  title="Add to card">
                  <i class="ti-shopping-cart"></i>
                 </button>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn">
            <div class="card text-center height-100p shadow-v1">
             <span class="badge badge-pill badge-primary position-absolute top-20 left-10">-20%</span>
              <div class="card-header">
                <img class="w-100" src="assets/img/shop/products/4.jpg" alt="">
              </div>
              <div class="card-body px-3 py-0">
               <a href="shop-single.html" class="h6">Bootstrap Referance Guide</a>
               <p class="text-gray">
                 Thomas Rang
               </p>
               <div class="d-flex align-items-center justify-content-between">
                 <p class="mb-0 font-weight-semiBold">
                   <span class="text-primary">$65.45</span>
                   <span class="text-gray"><s>$80.45</s></span>
                 </p>
                <ul class="list-unstyled ec-review-rating font-size-12">
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                </ul>
               </div>
              </div>
              <div class="card-footer border-top-0">
                <button class="btn btn-outline-primary mx-1">Buy Now</button>
                <button class="btn btn-outline-light mx-1"         
                  data-container="body"
                  data-toggle="tooltip"
                  data-placement="top"
                  data-skin="light"
                  title="Add to card">
                  <i class="ti-shopping-cart"></i>
                 </button>
              </div>
            </div>
          </div>
         
          <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn">
            <div class="card text-center height-100p shadow-v1">
              <div class="card-header">
                <img class="w-100" src="assets/img/shop/products/3.jpg" alt="">
              </div>
              <div class="card-body px-3 py-0">
               <a href="shop-single.html" class="h6">The Self-Taought Programmer</a>
               <p class="text-gray">
                 Alex Lebby
               </p>
               <div class="d-flex align-items-center justify-content-between">
                 <p class="mb-0 font-weight-semiBold">
                   <span class="text-primary">$99.45</span>
                 </p>
                <ul class="list-unstyled ec-review-rating font-size-12">
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="fas fa-star"></i></li>
                  <li class="active"><i class="far fa-star"></i></li>
                  <li class="active"><i class="far fa-star"></i></li>
                </ul>
               </div>
              </div>
              <div class="card-footer border-top-0">
                <button class="btn btn-outline-primary mx-1">Buy Now</button>
                <button class="btn btn-outline-light mx-1"         
                  data-container="body"
                  data-toggle="tooltip"
                  data-placement="top"
                  data-skin="light"
                  title="Add to card">
                  <i class="ti-shopping-cart"></i>
                 </button>
              </div>
            </div>
          </div>
          
          <div class="col-12 marginTop-60">        
          <ul class="pagination pagination-primary align-items-center justify-content-between">
            <li class="page-item mx-1">
              <a class="page-link btn btn-sm width-auto rounded-pill" href="#">
                <i class="ti-arrow-left small mr-2"></i>
                Previous
              </a>
            </li>
            <li class="page-item mx-1">Page 2 of 45</li>
            <li class="page-item mx-1">
              <a class="page-link btn btn-sm rounded-pill" href="#">
                Next
                <i class="ti-arrow-right small ml-2"></i>
              </a>
            </li>
          </ul>
          </div>
        </div> <!-- END row-->
      </div> <!-- END col-md-9-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>





<?php include "footer.php" ?>
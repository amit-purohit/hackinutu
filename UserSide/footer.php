   

<footer class="site-footer">
  <div class="footer-top bg-dark text-white-0_6 pt-5 paddingBottom-100">
    <div class="container"> 
      <div class="row">

        <div class="col-lg-3 col-md-6 mt-5">
         <img src="assets/img/bca.png" alt="Logo">
         <div class="margin-y-40">
           <p>
            We provide the best of our education to uplift your IT skills and make you Industry ready!!!
          </p>
        </div>
        <ul class="list-inline"> 
          <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-facebook"> </i></a></li>
          <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-twitter"> </i></a></li>
          <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-linkedin"> </i></a></li>
          <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-pinterest"></i></a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 mt-5">
        <h4 class="h5 text-white">Contact Us</h4>
        <div class="width-3rem bg-primary height-3 mt-3"></div>
        <ul class="list-unstyled marginTop-40">
          <li class="mb-3"><i class="ti-headphone mr-3"></i><a href="tel:+8801740411513">800 567.890.576 </a></li>
          <li class="mb-3"><i class="ti-email mr-3"></i><a href="mailto:support@educati.com">support@bcastuffs.com</a></li>
          <li class="mb-3">
           <div class="media">
            <i class="ti-location-pin mt-2 mr-3"></i>
            <div class="media-body">
              <span>Surat,Gujarat,INDIA</span>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-6 mt-5">
      <h4 class="h5 text-white">Quick links</h4>
      <div class="width-3rem bg-primary height-3 mt-3"></div>
      <ul class="list-unstyled marginTop-40">
        <li class="mb-2"><a href="about.php">About Us</a></li>
        <li class="mb-2"><a href="contact.php">Contact Us</a></li>
        <li class="mb-2"><a href="page_sp_student_profile.php">Students</a></li>
        <li class="mb-2"><a href="page-sp-admission-apply.html">Admission</a></li>
        <li class="mb-2"><a href="event-page.php">Events</a></li>
        <li class="mb-2"><a href="news.php">Latest News</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-6 mt-5">
      <h4 class="h5 text-white">Newsletter</h4>
      <div class="width-3rem bg-primary height-3 mt-3"></div>
      <div class="marginTop-40">
        <p class="mb-4">Subscribe to get update and information. Don't worry, we won't send spam!</p>
        <!-- <form class="marginTop-30" action="#" method="POST"> -->
          <div class="input-group">
            <input type="text" placeholder="Enter your email" class="form-control py-3 border-white">
            <div class="input-group-append">
              <button class="btn btn-primary" id="subscribe">Subscribe</button>
            </div>
          </div>
          <!-- </form> -->
        </div>
      </div>

    </div> <!-- END row-->
  </div> <!-- END container-->
</div> <!-- END footer-top--> 

<div class="footer-bottom bg-black-0_9 py-5 text-center">
  <div class="container">
    <p class="text-white-0_5 mb-0">&copy; 2020 BCAStuffs. All rights reserved. Created by Arun Purohit</p>
  </div>
</div>  <!-- END footer-bottom-->
</footer> <!-- END site-footer -->


<!-- <div class="scroll-top">
  <i class="ti-angle-up"></i>
</div> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="assets/js/vendors.bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<script type="text/javascript">
  $(function() {
    $("#subscribe").click(function(event) {
     
      swal({
        title: "Good job!",
        text: "Your Subscription is done successfully",
        icon: "success",
      });
    });
  });


</script>
</body>

</html>
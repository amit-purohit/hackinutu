<?php
session_start();
error_reporting(1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <!-- Title-->
  <title>BCA STUFFS</title>

  <!-- SEO Meta-->
  <meta name="description" content="Education theme by EchoTheme">
  <meta name="keywords" content="HTML5 Education theme, responsive HTML5 theme, bootstrap 4, Clean Theme">
  <meta name="author" content="education">

  <!-- viewport scale-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


  <!-- Favicon and Apple Icons-->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico">
  <link rel="shortcut icon" href="../assets/img/favicon/114x114.png">
  <link rel="apple-touch-icon-precomposed" href="../assets/img/favicon/96x96.png">

  <!--Google fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500">


  <!-- Icon fonts -->
  <link rel="stylesheet" href="../assets/fonts/fontawesome/css/all.css">
  <link rel="stylesheet" href="../assets/fonts/themify-icons/css/themify-icons.css">


  <!-- stylesheet-->    
  <link rel="stylesheet" href="../assets/css/vendors.bundle.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <!--basic boostrap and jquery cdn-->
  <script type="text/javascript" src="../../bootstrap/jquery/jquery3_4_1.js"></script>

</head>

<body>


  <!-- <header class="site-header bg-dark text-white-0_5">        
    <div class="container">
      <div class="row align-items-center justify-content-between mx-0">
        <ul class="list-inline d-none d-lg-block mb-0">
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
            <i class="ti-email mr-2"></i>
            <a href="mailto:support@educati.com">support@educati.com</a>
          </div>
        </li>
        <li class="list-inline-item mr-3">
         <div class="d-flex align-items-center">
          <i class="ti-headphone mr-2"></i>
          <a href="tel:+8801740411513">+8801740411513</a>
        </div>
      </li>
    </ul>
    <ul class="list-inline mb-0">
      <li class="list-inline-item mr-0 p-3 border-right border-left border-white-0_1">
        <a href="#"><i class="ti-facebook"></i></a>
      </li>
      <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
        <a href="#"><i class="ti-twitter"></i></a>
      </li>
      <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
        <a href="#"><i class="ti-vimeo"></i></a>
      </li>
      <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
        <a href="#"><i class="ti-linkedin"></i></a>
      </li>
    </ul>
    <ul class="list-inline mb-0">
      <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1">
        <a href="login_page.php">Login</a>
      </li>
      <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
        <a href="signup_page.php">Register</a>
      </li>
    </ul> -->
    <!-- </div>  --><!-- END END row-->
    <!-- </div> --> <!--  END container -->
    <!-- </header> --><!-- END site header-->



    <nav class="ec-nav sticky-top bg-white">
      <div class="container">
        <div class="navbar p-0 navbar-expand-lg">
          <div class="navbar-brand">
            <a class="logo-default" href="index.html"><img alt="" src="../assets/img/bca.png"></a>
          </div>
          <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
            <div class="hamburger hamburger--spin js-hamburger">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </span>
          <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
            <ul class="nav navbar-nav ec-nav__navbar ml-auto">

              <li class="nav-item nav-item__has-megamenu megamenu-col-2">
                <a class="nav-link" href="index.php" data-toggle="dropdown">Home</a>
             <!--  <div class="dropdown-menu left-auto p-2 p-md-4">
                <div class="row mx-0">
                  <div class="col-lg-6">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list px-0" href="index-school-default.html">Demo School</a></li>
                      <li><a class="nav-link__list px-0" href="index-school-online.html">Demo Online School</a></li>
                      <li><a class="nav-link__list px-0" href="index-college.html">Demo College</a></li>
                      <li><a class="nav-link__list px-0" href="index-university.html">Demo Harvard University</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list px-0" href="index-online-university.html">Demo Online University</a></li>
                      <li><a class="nav-link__list px-0" href="index-lynda.html">Demo Lynda</a></li>
                      <li><a class="nav-link__list px-0" href="index-udemy.html">Demo Udemy</a></li>
                      <li><a class="nav-link__list px-0" href="index-one-course.html">Demo One Course</a></li>
                    </ul>
                  </div>
                </div>
              </div> -->
            </li>

            <li class="nav-item nav-item__has-dropdown">
              <a class="nav-link" href="page_sp_all_course.php" >Courses</a>
<!--               <ul class="dropdown-menu">
                <li><a href="course_page.php" class="nav-link__list">All Courses</a></li>
                <li><a href="page-sp-all-courcess-list.html" class="nav-link__list">Courses List</a></li>
                <li><a href="page-sp-all-courcess-with-sidebar.html" class="nav-link__list">Courses Grid</a></li>
                <li><a href="page-sp-all-courcess-list-with-sidebar.html" class="nav-link__list">Courses List Sidebar</a></li>
                <li><a href="page-sp-all-courcess-with-sidebar.html" class="nav-link__list">Courses Grid Sidebar</a></li>
                <li><a href="page-sp-course-details.html" class="nav-link__list">Courses Details</a></li>
              </ul> -->
            </li>

            <li class="nav-item nav-item__has-dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">pages</a>
              <div class="dropdown-menu">
                <ul class="list-unstyled">
                 <li><a class="nav-link__list" href="about.php">About</a></li>

                 <!-- <li class="nav-item__has-dropdown"> -->
                  <a class="nav-link__list" href="event-page.php" > Events </a>
                  <!-- <div class="dropdown-menu">
                    <ul class="list-unstyled"> -->
                      <!-- <li><a class="nav-link__list" href="event-page.php"> Events </a></li> -->
                      <!-- <li><a class="nav-link__list" href="page-event-details.html"> Events Details</a></li> -->
                    <!-- </ul>
                  </div>
                </li> -->

                <li class="nav-item__has-dropdown">
                  <a class="nav-link__list dropdown-toggle" href="support.php" data-toggle="dropdown"> Support </a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list" href="contact.php"> Support </a></li>
                      <li><a class="nav-link__list" href="help-support.php"> Support Topic</a></li>
                      <li><a class="nav-link__list" href="page-help-%26-support-details.html"> Support Details</a></li>
                      <li><a class="nav-link__list" href="page-terms-and-privacy-policy.html"> Privacy Policy </a></li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item__has-dropdown">
                  <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> User </a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list" href="login_page.php" id="login"> Login </a></li>
                      <!-- <li><a class="nav-link__list" href="login_page.php" id="logout"> Logout </a></li> -->
                      <li><a class="nav-link__list" href="signup_page.php"> Sign up</a></li>
                      <li><a class="nav-link__list" href="page-recover-password.html"> Reset Password</a></li>
                      <li><a class="nav-link__list" href="page-sp-student-profile.html"> Students Profile</a></li>
                      <li><a class="nav-link__list" href="page-user-profile.html">  Instructors Profile</a></li>
                      <li><a class="nav-link__list" href="page-sp-become-instructor.html">  Become Instructors</a></li>
                      <li><a class="nav-link__list" href="page-sp-order-details.html">  Order Details</a></li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item__has-dropdown">
                  <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> Notice </a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list" href="page-notice.html"> Notices </a></li>
                      <li><a class="nav-link__list" href="page-notice-details.html"> Notics Details</a></li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item__has-dropdown">
                  <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> Faculty </a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list" href="page-sp-faculty.html"> Faculty </a></li>
                      <li><a class="nav-link__list" href="page-sp-research.html"> Research </a></li>
                      <li><a class="nav-link__list" href="page-sp-research-details.html"> Research Details</a></li>
                      <li><a class="nav-link__list" href="page-sp-scholarship.html"> Scholarship</a></li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item__has-dropdown">
                  <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> Career </a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list" href="page-career.html"> Careers </a></li>
                      <li><a class="nav-link__list" href="page-career-details.html"> Career Details </a></li>
                    </ul>
                  </div>
                </li>

                <li>
                 <a class="nav-link__list" href="page-sp-vc.html">VC</a>
               </li>
               <li>
                <a class="nav-link__list" href="page-faq.html"> FAQs </a>
              </li>
              <li>
               <a class="nav-link__list" href="page-contact.html">Contact</a>
             </li>
             <li>
              <a class="nav-link__list" href="page-404.html"> 404 </a>
            </li>
            <li>
             <a class="nav-link__list" href="page-coming-soon.html">Coming Soon</a>
           </li>
         </ul>
       </div>
     </li>

     <li class="nav-item nav-item__has-dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Blog </a>
      <div class="dropdown-menu">
        <ul class="list-unstyled">

         <li class="nav-item__has-dropdown">
          <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> Layout </a>
          <div class="dropdown-menu">
            <ul class="list-unstyled">
              <li><a class="nav-link__list" href="blog-standard.html"> Standard </a></li>
              <li><a class="nav-link__list" href="blog-card.html"> Card </a></li>
              <li><a class="nav-link__list" href="blog-masonry.html"> Mesonry </a></li>
              <li><a class="nav-link__list" href="blog-list.html"> List </a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item__has-dropdown">
          <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> Single Post</a>
          <div class="dropdown-menu">
            <ul class="list-unstyled">
              <li><a class="nav-link__list" href="blog-single.html"> Image </a></li>
              <li><a class="nav-link__list" href="blog-single-audio.html"> Audio </a></li>
              <li><a class="nav-link__list" href="blog-single-soundcloud.html"> Sound Cloud </a></li>
              <li><a class="nav-link__list" href="blog-single-video-HTML5.html"> HTML5 Video </a></li>
              <li><a class="nav-link__list" href="blog-single-video-youtube.html"> Youtube Video </a></li>
              <li><a class="nav-link__list" href="blog-single-video-vimeo.html"> Vimeo Video </a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </li>

  <li class="nav-item nav-item__has-dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Shop </a>
    <div class="dropdown-menu">
      <ul class="list-unstyled">
        <li>
          <a class="nav-link__list" href="shop.html"> Shop </a>
        </li>
        <li>
          <a class="nav-link__list" href="shop-single.html"> Shop Single</a>
        </li>
        <li>
          <a class="nav-link__list" href="shop-cart.html"> Cart</a>
        </li>
        <li>
          <a class="nav-link__list" href="shop-checkout.html"> Checkout</a>
        </li>
        <li>
          <a class="nav-link__list" href="shop-order-success.html">Order Success</a>
        </li>

      </ul>
    </div>
  </li>

            <!-- <li class="nav-item nav-item__has-megamenu">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Elements</a>
              <div class="dropdown-menu p-2 p-md-4">
                <div class="row mx-0">
                  <div class="col-md-3">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list px-0" href="element-accordion.html">Accordions</a></li>
                      <li><a class="nav-link__list px-0" href="element-alerts.html">Alerts</a></li>
                      <li><a class="nav-link__list px-0" href="element-avatars.html">Avatars</a></li>
                      <li><a class="nav-link__list px-0" href="element-badges.html">Badges</a></li>
                      <li><a class="nav-link__list px-0" href="element-breadcrumbs.html">Breadcrumbs</a></li>
                      <li><a class="nav-link__list px-0" href="element-buttons.html">Buttons</a></li>
                      <li><a class="nav-link__list px-0" href="element-call-to-action.html">Call To Action</a></li>
                      <li><a class="nav-link__list px-0" href="element-carousels.html">Carousels</a></li>
                      <li><a class="nav-link__list px-0" href="element-checkbox.html">Checkbox</a></li>
                      <li><a class="nav-link__list px-0" href="element-counters.html">Counters</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list px-0" href="element-card.html">Card</a></li>
                      <li><a class="nav-link__list px-0" href="element-countdown.html">Countdown</a></li>
                      <li><a class="nav-link__list px-0" href="element-dropcaps.html">Dropcaps</a></li>
                      <li><a class="nav-link__list px-0" href="element-dropdown.html">Dropdown</a></li>
                      <li><a class="nav-link__list px-0" href="element-form.html">Form</a></li>
                      <li><a class="nav-link__list px-0" href="element-gallery.html">Gallery</a></li>
                      <li><a class="nav-link__list px-0" href="element-infobox.html">Infobox</a></li>
                      <li><a class="nav-link__list px-0" href="element-infobox-card.html">Infobox Card</a></li>
                      <li><a class="nav-link__list px-0" href="element-lightbox.html">Lightbox</a></li>
                      <li><a class="nav-link__list px-0" href="element-list-group.html">List Group</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list px-0" href="element-map.html">Map</a></li>
                      <li><a class="nav-link__list px-0" href="element-modal.html">Modal</a></li>
                      <li><a class="nav-link__list px-0" href="element-pagintion.html">Pagintion</a></li>
                      <li><a class="nav-link__list px-0" href="element-popover.html">Popover</a></li>
                      <li><a class="nav-link__list px-0" href="element-pricing.html">Pricing</a></li>
                      <li><a class="nav-link__list px-0" href="element-progress.html">Progress</a></li>
                      <li><a class="nav-link__list px-0" href="element-radio.html">Radio</a></li>
                      <li><a class="nav-link__list px-0" href="element-range-slider.html">Range Slider</a></li>
                      <li><a class="nav-link__list px-0" href="element-rating.html">Rating</a></li>
                      <li><a class="nav-link__list px-0" href="element-select.html">Select</a></li>                           
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="list-unstyled">
                      <li><a class="nav-link__list px-0" href="element-tables.html">Tables</a></li>
                      <li><a class="nav-link__list px-0" href="element-tabs.html">Tabs</a></li>
                      <li><a class="nav-link__list px-0" href="element-team.html">Team</a></li>
                      <li><a class="nav-link__list px-0" href="element-testimonials.html">Testimonials</a></li>
                      <li><a class="nav-link__list px-0" href="element-timeline.html">Timeline</a></li>
                      <li><a class="nav-link__list px-0" href="element-tooltip.html">Tooltip</a></li>
                      <li><a class="nav-link__list px-0" href="element-touchspin.html">Touchspin</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li> -->
          </ul>
        </div>
        <div class="nav-toolbar">
          <ul class="navbar-nav ec-nav__navbar">
            <li class="nav-item nav-item__has-dropdown">
              <a class="nav-link dropdown-toggle no-caret" href="#" data-toggle="dropdown"><i class="ti-shopping-cart"></i></a>
              <ul class="dropdown-menu dropdown-cart" aria-labelledby="navbarDropdown">
                <li class="dropdown-cart__item">
                  <div class="media">
                    <img class="dropdown-cart__img" src="../assets/img/shop/products/2.jpg" alt="">
                    <div class="media-body pl-3">
                      <a href="#" class="h6">Quick intro to Python</a>
                      <span class="text-primary">$199.00</span>
                    </div>
                  </div>
                  <a href="#" class="dropdown-cart__item-remove">
                    <i class="ti-close"></i>
                  </a>
                </li>
                <li class="dropdown-cart__item">
                  <div class="media">
                    <img class="dropdown-cart__img" src="../assets/img/shop/products/4.jpg" alt="">
                    <div class="media-body pl-3">
                      <a href="#" class="h6">Gentel intro to C++</a>
                      <span class="text-primary">$45.00</span>
                    </div>
                  </div>
                  <a href="#" class="dropdown-cart__item-remove">
                    <i class="ti-close"></i>
                  </a>
                </li>
                <li class="dropdown-cart__item">
                  <div class="media">
                    <img class="dropdown-cart__img" src="../assets/img/shop/products/3.jpg" alt="">
                    <div class="media-body pl-3">
                      <a href="#" class="h6">Programming 101</a>
                      <span class="text-primary">$79.00</span>
                    </div>
                  </div>
                  <a href="#" class="dropdown-cart__item-remove">
                    <i class="ti-close"></i>
                  </a>
                </li>
                <li class="px-2 py-4 text-center">
                  Subtotal: <span class="text-primary font-weight-semiBold"> $275.00</span>
                </li>
                <li class="px-2 pb-4 text-center">
                  <button class="btn btn-outline-primary mx-1">View Cart</button>
                  <button class="btn btn-primary mx-1">Checkout</button>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link site-search-toggler" href="#">
                <i class="ti-search"></i>
              </a>
            </li>

            <ul class="list-inline mb-0" >
              <li class="list-inline-item mr-0  p-2 border-right border-left border-white-0_1" style="padding: 30px 8px 30px 8px !important;margin-left: 5rem !important ">
                <a href="login_page.php" id="login1">Login</a>
              </li>
              <li class="list-inline-item mr-0  p-2 border-right border-white-0_1" >
                <a href="signup_page.php">Register</a>
              </li>
              <li class="list-inline-item mr-0  p-2 border-right border-white-0_1" >
               <h6 class="h6" style="padding-right: 10px; "><?php echo $_SESSION["name"]; ?></h6>
              </li>
            </ul>

          </ul>
        </div>    
      </div>
    </div> <!-- END container-->    
  </nav> <!-- END ec-nav -->    

  <div class="site-search">
   <div class="site-search__close bg-black-0_8"></div>
   <form class="form-site-search" action="index.php" method="post">
    <div class="input-group">
      <input type="text" size="30" placeholder="Search" class="form-control py-3 border-white" required="" onkeyup="fx(this.value)">
       <div id="livesearch"></div>
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
      </div>
    </div>
  </form> 
</div> <!-- END site-search-->
<?php
if(isset($_SESSION['logged_in']))
{
  ?>
  <script type="text/javascript">
    $(function() {
      $("#login1").html("<a href='logout.php' id='logout'>Logout</a>")
    });
  </script>

  <?php
}
?>

<?php
if(!isset($_SESSION['logged_in']))
{
  ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#login1").html("<a href='#' style='padding: 30px 8px 30px 8px !important;margin-left: 5rem !important'></a>");
    });
  </script>
  <?php
}
?>

</body>
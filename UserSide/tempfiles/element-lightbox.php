<?php
  include "header.php"
?>

    


<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>Lightbox</h2>
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
          Lightbox
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>  



   
   
   
<section class="padding-y-100 border-bottom border-light wow fadeIn">
  <div class="container">
    <div class="row">
     <div class="col-12 mb-5 text-center">
       <h4>Lightbox - <span class="text-primary">01</span></h4>
     </div>
    </div> <!-- END row-->
    <div class="row mb-4">
    <div class="col-6 col-lg-4">

        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/i-FqQIkJMqg/1536x2304" data-width="1536" data-height="2304">
            <img class="img-fluid" src="https://source.unsplash.com/i-FqQIkJMqg/416x623">
        </a>

        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/EMSDtjVHdQ8/1279x853" data-width="1279" data-height="853">
            <img class="img-fluid" src="https://source.unsplash.com/EMSDtjVHdQ8/416x278">
        </a>

    </div>
    <div class="col-6 col-lg-4">
        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/eaS5h6mR1BE/1279x719" data-width="1279" data-height="719">
            <img class="img-fluid" src="https://source.unsplash.com/eaS5h6mR1BE/416x234">
        </a>

        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/z55CR_d0ayg/1279x853" data-width="1279" data-height="853">
            <img class="img-fluid" src="https://source.unsplash.com/z55CR_d0ayg/416x278">
        </a>

        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/r0q06hjTgOc/1279x853" data-width="1279" data-height="853">
            <img class="img-fluid" src="https://source.unsplash.com/r0q06hjTgOc/416x350">
        </a>

    </div>
    <div class="col-6 col-lg-4 d-none d-lg-block">

        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/Q1Zyjio6pIM/1279x870" data-width="1279" data-height="870">
            <img class="img-fluid" src="https://source.unsplash.com/Q1Zyjio6pIM/416x283">
        </a>

        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/lw3GfSfGY9w/1519x2279" data-width="1519" data-height="2279">
            <img class="img-fluid" src="https://source.unsplash.com/lw3GfSfGY9w/416x623">
        </a>

    </div>
</div>
  </div> <!-- END container-->
</section>   


   
   
<section class="padding-y-100 border-bottom border-light wow fadeIn">
  <div class="container">
    <div class="row">
     <div class="col-12 mb-5 text-center">
       <h4>Lightbox - <span class="text-primary">02</span></h4>
     </div>
    </div> <!-- END row-->
    <div class="row">
      <div class="col-md-4 mt-4">
      <div class="card card-body shadow-v3 mb-2">
       <h6>Youtube video</h6>
        <a data-fancybox="" class="btn btn-outline-primary align-self-start mt-2" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
          Lunch demo
        </a>
      </div>
      </div>
      <div class="col-md-4 mt-4">
      <div class="card card-body shadow-v3 mb-2">
       <h6>Vimeo video</h6>
        <a data-fancybox="" class="btn btn-outline-primary align-self-start mt-2" href="https://player.vimeo.com/video/191947042">
          Lunch demo
        </a>
      </div>
      </div>
      <div class="col-md-4 mt-4">
      <div class="card card-body shadow-v3 mb-2">
       <h6>HTML5 video</h6>
        <a data-fancybox="" class="btn btn-outline-primary align-self-start mt-2" href="http://download.blender.org/peach/bigbuckbunny_movies/BigBuckBunny_320x180.mp4">
          Lunch demo
        </a>
      </div>
      </div>
    </div>
  </div> <!-- END container-->
</section>  

   
   
   
<section class="padding-y-100 border-bottom border-light wow fadeIn">
  <div class="container">
    <div class="row">
     <div class="col-12 mb-5 text-center">
       <h4>Lightbox - <span class="text-primary">03</span></h4>
     </div>
    </div> <!-- END row-->
    <div class="row">
      <div class="col-md-4 mt-4">
      <div class="card card-body shadow-v3 mb-2">
       <h6>Hidden HTML element</h6>
        <a data-fancybox="" data-src="#hello" href="javascript:;" class="btn btn-outline-primary align-self-start mt-2">
          Open demo
        </a>
      </div>
      </div>
      <div class="col-md-4 mt-4">
      <div class="card card-body shadow-v3 mb-2">
       <h6>True modal</h6>
        <a data-fancybox="" data-src="#trueModal" data-modal="true" href="javascript:;" class="btn btn-outline-primary align-self-start mt-2">Open demo</a>
      </div>
      </div>
    </div>
  </div> <!-- END container-->
</section>   


    
     <div style="display: none;" id="hello" class="p-5">
        <h2>
            Hello!
        </h2>
        <p>
            You are awesome!
        </p>
    </div>
    
    <div id="trueModal" class="p-5" style="display: none;max-width:600px;">
        <h2>
            I'm a modal!
        </h2>
        <p>
            You can close me only by pressing custom button below.
        </p>
        <p>
            It would also be possible to prevent closing using <code>beforeClose</code> callback.
        </p>
        <p>
            <button data-fancybox-close class="btn btn-primary">Close me</button>
        </p>
    </div>

   
   
    

<?php include "footer.php" ?>
<?php
  include "header.php"
?>

    
          
    

<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>Popover</h2>
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
          Popover
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>


   
   
<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
       <h4 class="mb-5 text-center">Basic popover with placement</h4>
        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="top"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          On top
        </button>

        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="right"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          On right
        </button>

        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="bottom"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          On bottom
        </button>

        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="left"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          On left
        </button>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>


   
   
<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5">
       <h4 class="mb-5 text-center">Popover with hover</h4>
        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="top"
          data-trigger="hover"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          On top
        </button>

        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="right"
          data-trigger="hover"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          On right
        </button>

        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="bottom"
          data-trigger="hover"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          On bottom
        </button>

        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="left"
          data-trigger="hover"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          On left
        </button>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>


   
   
<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5">
       <h4 class="mb-5 text-center">Popover skin variant</h4>
        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="top"
          data-skin="dark"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          Dark skin
        </button>

        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="right"
          data-skin="primary"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          Primary skin
        </button>

        <button class="btn btn-secondary mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="bottom"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          Default skin
        </button>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
 


   
   
<section class="padding-y-80 border-bottom border-light">
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5">
       <h4 class="mb-5 text-center">Popover with focus state</h4>
        <a tabindex="0" role="button" class="mr-4 mb-3" 
          data-container="body"
          data-toggle="popover"
          data-placement="top"
          data-trigger="focus"
          title="Cool popover title"
          data-content="And here's some amazing content. It's very engaging. Right?"
          >
          Click anyhere to close it
        </a>

      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
 
    
    

<?php include "footer.php" ?>
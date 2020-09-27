<?php
include 'header.php';
session_start();
$user=$_SESSION["userid"];
if(!isset($_SESSION['logged_in'])){
  echo "<script>window.open('login_page.php','_self');</script>";

}
else{
      //echo $user;
}
?>
<style>
  .load-more{
    width: 99%;
    background: #15a9ce;
    text-align: center;
    color: white;
    padding: 10px 0px;
    font-family: sans-serif;
  }

  .load-more:hover{
    cursor: pointer;
  }
</style>

<div class="py-5 bg-cover text-white" data-dark-overlay="5" style="background:url(assets/img/1920/658_2.jpg) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>Blog</h2>
     </div>
     <div class="col-md-6">
      <ol class="breadcrumb justify-content-md-end bg-transparent">  
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li> 
        <li class="breadcrumb-item">
          <a href="#"> Blog</a>
        </li>
        <li class="breadcrumb-item">
          coursestudy
        </li>
      </ol>
    </div>
  </div>
</div> 
</div>



<section class="pt-5 paddingBottom-150 bg-light-v2">
  <div class="container">
    <div class="row">

      <aside class="col-lg-3 mt-4"> 

       <div class="widget widget_search">
        <form action="#" method="POST"> 
          <div class="input-group">
            <input type="text" class="form-control border-0 pr-0 pl-3 u-py-15" placeholder="Search" required="">
            <button type="submit" class="input-group-btn btn bg-white">
              <span class="ti-search"></span>
            </button>
          </div>
        </form>
      </div> <!-- END widget--> 
      
      <div class="widget sticky-top fixed-top">
       <h2 class="widget-title ">
         Category List
       </h2>
       <ul>

         <?php
         $counter=1;
         include "C:/wamp64/www/mystudysite/connection.php";
         error_reporting(1);
         $cid=$_GET["cid"];
         $sql1="select * from topic_master where course_id=$cid";

         $result1=mysqli_query($con,$sql1);
         while($row1=mysqli_fetch_array($result1))
         {
          ?>
          <li><a  data-scroll href="#<?php echo $counter; ?>" class="cd"><?php echo $row1[2]; ?></a></li>
          <?php
          $counter++;
        }
        ?>
      </ul>
    </div> 

  </aside> 
  <div class="col-lg-9 mt-4">

    <div class="card">        
      <div class="card-body">

       <!-- <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/339318387&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe> -->
       <div class="more">
         <?php
         $cid=$_GET['cid'];
         $rowperpage = 3;

            // counting total number of posts
         $allcount_query = "SELECT count(*) as allcount FROM topic_master WHERE course_id=$cid";
         $allcount_result = mysqli_query($con,$allcount_query);
         $allcount_fetch = mysqli_fetch_array($allcount_result);
         $allcount = $allcount_fetch['allcount'];
             //echo $allcount;


         $counter1=1;

         $sql2="select * from topic_master where course_id=$cid ";


         $result2=mysqli_query($con,$sql2);
         $i=1;
         while($row2=mysqli_fetch_array($result2))
         {


           ?>
           <a id="<?php echo $counter1;?>"></a>

           <h2 class="my-4">
            <?php echo $row2[2]; ?>
          </h2>
          <?php
          $sql3="select * from content_master where topic_id=$row2[0] ";
          $result3=mysqli_query($con,$sql3);
          while($row3=mysqli_fetch_array($result3))
          {
            ?>
            <p>
              <input type="hidden" name="" name="<?php echo $counter1; ?>" class="cdc">

              <?php echo $row3[3]; ?>

            </p>
            <?php
            $counter1++;
          }
          ?>        
          <?php
        }


        ?>
      </div>
      <h1 class="load-more">Load More</h1>
    </div>

   
  </div> <!-- END card-body-->
</div> <!-- END card-->


<div class="card shadow-v5 mt-5 padding-40 col-lg-12">
  <h4>
    Leave a Reply
  </h4>
  <p>
    Your email address will not be published. Required fields are marked *
  </p>
  <form action="" method="post">
    <div class="row mt-4">
      <div class="col-md-6 mb-4">
        <input type="text" name="username" class="form-control" placeholder="Name *">
      </div>
      <div class="col-md-6 mb-4">
        <input type="text" name="useremail" class="form-control" placeholder="Email *">
      </div>
    </div>
    <textarea class="form-control mb-4" name="message" rows="5" placeholder="Your text *" name="keypress" id="keypress"></textarea>
    <div id="livesearch"></div>
    <div id="search-layer"></div>

    <input type="submit" name="post" class="btn btn-primary" value="Post feedback">
  </form>
</div>
<?php 
include "connection.php";

date_default_timezone_set("Asia/Kolkata");
if(!empty($_POST['post']) && !empty($_POST['username']) && !empty($_POST['useremail']) && !empty($_POST['message']))
{
  $from = $_SESSION['email'];
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From:  ' . $name . ' <' . $from .'>' . " \r\n" .
  'Reply-To: '.  $from . "\r\n" .
  'X-Mailer: PHP/' . phpversion();



  $to="rajpurohitarun97@gmail.com";
  $name = $_POST['username'];
  $message = $_POST['message'];
  $subject="Feedback mail";
    //$headers = "From: $from";
    //echo $headers;

  if(mail($to, $subject, $message, $headers, $from))
  {
    echo"mail send";

  }
  else
  {
    echo "mail not sent";
  } 
}
else {
  echo "none of the feild must be empty";
}

?>


<script>
  $('#keypress').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '64'){
        // function lightbg_clr() {
        //   $('#qu').val("");
        //   $('#textbox-clr').text("");
        //   $('#search-layer').css({"width":"auto","height":"auto"});
        //   $('#livesearch').css({"display":"none"}); 
        //   $("#qu").focus();
        // };
        alert('You pressed a "enter" key in textbox');  

        function fx(str)
        {
          var s1=document.getElementById("keypress").value;
          alert(s1);
          var xmlhttp;
          if (str.length==0) {
            document.getElementById("livesearch").innerHTML="a";
            document.getElementById("livesearch").style.border="0px";
            document.getElementById("search-layer").style.width="auto";
            document.getElementById("search-layer").style.height="auto";
            document.getElementById("livesearch").style.display="block";
            $('#textbox-clr').text("");
            return;
          }
          if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("search-layer").style.width="100%";
      document.getElementById("search-layer").style.height="100%";
      document.getElementById("livesearch").style.display="block";
      $('#textbox-clr').text("X");
    }
  }
  xmlhttp.open("GET","fetch-user.php?n="+s1,true);
  xmlhttp.send(); 
}
}
});




</script>  

  <!-- <script type="text/javascript">
    $('#keypress').keypress(function(event){
      var keycode = (event.keyCode ? event.keyCode : event.which);
      if(keycode == '64')
      {

        load_data();
        function load_data(query)
        {
          $.ajax({
            url:"fetch-user.php",
            method:"post",
            data:{query:query},
            success:function(data)
            {
              $('#result').html(data);
            }
          });
        }
      }
    });


  </script> -->

</div> <!-- END col-lg-9 -->

</div> <!-- END row-->
</div> <!-- END container-->
</section>  <!-- END section -->





<!-- <script>
  // function for scrolling

  function myFunction() {
    var elmnt = document.getElementById("txt");
    elmnt.scrollIntoView();
  }

  $(document).ready(function() {
    $('.cd').css('cursor', 'pointer');
    
  });
</script> -->


<?php
include 'footer.php';
?>



<script type="text/javascript">

</script>


<!-- script to add more or read less button -->

<!-- <script>
  $(document).ready(function() {
    var showChar = 1000;
    var ellipsestext = "";
    var moretext = "More (+)";
    var lesstext = "Less (-)";
    $('.more').each(function() {
      var content = $(".more").html();
        // alert(content);

        if(content.length > showChar) {

          var c = content.substr(0, showChar);
          var h = content.substr(showChar-1, content.length - showChar);

          var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<button class="btn btn-outline-info"><a href="pay.php" class="morelink">'+moretext+'</a></button></span>';

          $(this).html(html);
        }

      });

    $(".morelink").click(function(){

      if($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
      } else {
        $(this).addClass("less");
        $(this).html(lesstext);
      }
      $(this).parent().prev().toggle();
      $(this).prev().toggle();
      window.location.href("pay.php");
      return false;
    });
  });
</script> -->

<!-- script to add more or read less button  end here-->
<script type="text/javascript">
  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href')); 
    $('html, body').animate({
      scrollTop: $section.offset().top-83
    }, 1000);
  }
  $('[data-scroll]').on('click', scrollToSection);



</script>

<!-- to display row per page starts here -->

<script>
  $(document).ready(function(){

    // Load more data
    $('.load-more').click(function(){
      var row = Number($('#row').val());
      var allcount = Number($('#all').val());
        //var rowperpage = 3;
       // row = row + rowperpage;

       // if(row <= allcount){
         //   $("#row").val(row);

         $.ajax({
          url: 'get_data.php',
          type: 'post',
          data: {rowstart:2
            ,rowend:<?php echo $allcount;?>,
            courseid:<?php echo $cid;?>},

            success: function(response){

                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class="post"
                        $(".more").after(response).show().fadeIn("slow");
                        $(".load-more").hide();
                      }, 800);

                  }
                });
        /*}else{
            $('.load-more').text("Loading...");

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='post' element after 3 element
                $('.post:nth-child(3)').nextAll('.post').remove();

                // Reset the value of row
                $("#row").val(0);

                // Change the text and background
                $('.load-more').text("Load more");
                $('.load-more').css("background","#15a9ce");
                
            }, 2000);


          }*/

        });

  });



</script>

<!-- to display row per page ends here -->

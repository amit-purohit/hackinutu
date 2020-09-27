<?php
include 'header.php';
?>
<head>
  <title>Upload Content</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
  <form action="upload_content.php" method="POST">
    
    <div class="mdk-drawer-layout__content page ">
      <div class="container-fluid page__container">
        <div class="row" style="padding-left: 300px;">
          <div class="col-md-12">
            <div class="h1">
              Add Content
            </div>
            <div class="form-group">
              <label>Select the course:</label><br>
              <div class="dropdown">
                <select id="coursedd" name="coursedd" onChange="change_topic(this.value)">
                  <option class="dropdown-item">Select Course</option>
                  <?php
                        //error_reporting(1);
                        include 'C:/wamp64/www/mystudysite/connection.php';

                        $query = "select * from course_master";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($result))
                        {
                            echo "<option value='$row[0]'>$row[1]</option>";
                        }
                  ?>
                </select>
              </div>

            </div>
            <div class="form-group">
              <label class="">Select the topic:</label><br>
              <div class="dropdown">
                <select name="titledd" id="titledd">
                  <option value="">title <?php echo $row[2] ?></option>
                </select>
                
              </div>
            </div>
            <div class="form-group">
              <label>Enter the subtitle(if any):</label><br>
              <input class="form-control" type="text" name="subtitle">
            </div>
            <div class="form-group">
              <label>Enter the Content1:</label><br>
              <!-- <input class="form-control" type="text" name="content1" style="height: 200px; width: 300px;"> -->
              <textarea class="form-control" rows="5" cols="50" name="content1"> </textarea>
            </div>
            <div class="form-group">
              <label>Enter the Content2:</label><br>
              <!-- <input class="form-control" type="text" name="content2" style="height: 200px; width: 300px;"> -->
              <textarea class="form-control" rows="5" cols="50" name="content2"> </textarea>
            </div>

            <div class="form-group">
              <label>Enter the CODE(if any):</label><br>
              <!--  <input class="form-control" type="text" name="code" style="height: 200px; width: 300px;"> -->
              <textarea class="form-control" rows="5" cols="50" name="code"> </textarea>
            </div>
            <div >
             <input class="btn btn-primary" type="submit" name="save" value="Upload">
           </div>

         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</form>
<script type="text/javascript" src="C:/wamp64/www/mystudysite/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

<script language="javascript" type="text/javascript">
  function getXMLHTTP() 
  { 
    var xmlhttp=false; 
    xmlhttp=new XMLHttpRequest();  
    return xmlhttp;
  }
  function change_topic(coursedd) 
  { 
    var strURL="ajax.php?coursedd="+coursedd;
    var req = getXMLHTTP();
    if (req) 
    {
     req.onreadystatechange = function() 
     {
       if (req.readyState == 4  && req.status == 200) 
       { 
         document.getElementById("titledd").innerHTML=req.responseText; 
       }
     }
     req.open("GET", strURL, true);
     req.send();
   } 
 }
 function aa()
 {
  return false;
}
// Inserting the value of the paragraph in topic_master
</script>

<?php
include 'C:/wamp64/www/mystudysite/connection.php';
//error_reporting(1);
if (isset($_POST["save"]))
{

    $para1 = $_POST["content1"];
    $para2 = $_POST["content2"];
    $code = $_POST["code"];
    $coursee_id = $_POST["coursedd"];
    $topic_id = $_POST["titledd"];

    $sql22 = "INSERT INTO `content_master`(`content_id`, `course_id`, `topic_id`, `p1`, `p2`) VALUES (NULL,$coursee_id,$topic_id,'$para1','$para2')";
    $result = mysqli_query($con, $sql22);

    //echo $sql22;

    if ($result == true)
    {

        echo "<script>
             Swal.fire(
             '',
             'Content successfully Uploaded',
             'success'
             );
             </script>";
    }
    else
    {

        echo "<script>Swal.fire({
                icon: 'error',
                title: 'Oops... Unable to add Content',
                text: 'Pls Enter proper detail!',
              })</script>";

    }

}

?>

<?php
include 'sidebar.php';
?>

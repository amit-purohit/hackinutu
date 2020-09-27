<?php


 include "connection.php";

$row = $_POST['rowstart'];
$rowperpage = $_POST['rowend'];
$cid=$_POST['courseid'];


$query = "SELECT * from content_master c,topic_master t where c.topic_id=t.topic_id and c.course_id=2 ORDER by t.topic_id  ASC LIMIT 2,6";
$result = mysqli_query($con,$query);

$counter1 = $row+1;
 while($row2=mysqli_fetch_array($result))
       {
         ?>
         <a id="<?php echo $counter1;?>"></a>
         <!-- <h6><?php  $counter1; ?></h6> -->

         <h2 class="my-4">
           <?php echo $row2['topic_name']; ?>
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
      }
?>
<?php
// include 'hhh.php';
include "header.php";
include 'C:/wamp64/www/mystudysite/connection.php'; 
error_reporting(1);

?>
<body>
	<form  method="POST" >
		<div class="container-fluid page__container" style="margin-left: 450px;">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
				<li class="breadcrumb-item"><a href="student-browse-courses.html">Courses</a></li>
				<li class="breadcrumb-item active"></li>
			</ol>
			<h1 class="h2">Tutorial</h1>
			<div class="row">
				<div class="col-md-8">
					<div class="card">
					<!-- <div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
					</div> -->
					<div class="card-body">
						This Tutorial is all about the syntax,examples and proper explanations
					</div>
				</div>
				<input type="hidden" class="topicname" id="idc" name="idc">
				<!-- Lessons -->
				<?php
				$counter = 1;
				$sql1="select * from topic_master where course_id=".$_GET['course_id'];
				$result3=mysqli_query($con,$sql1);

				while($row=mysqli_fetch_array($result3))
				{
					?>
					<ul class="card list-group list-group-fit">
						<li class="list-group-item">
							<div class="media">
								<div class="media-left">
									<div class="text-muted"><?php echo $counter; ?></div>
								</div>
								<div class="media-body">
									<label onclick="myFunction()"  id="lbl<?php echo $counter; ?>" class="lbl"><?php echo $row[2];?></label>

									<input type="hidden" class="topicname" id="txt<?php echo $counter; ?>" value="<?php echo $row[0];?>">
									
								</div>
								
							</div>
						</li>

					</ul>
					<?php
					$counter++;
				}


				if(isset($_POST["editcontent"]))
				{

					$idd=$_POST["idc"];
                    echo $idd;
					$contents=$_REQUEST["txtDesc"];
					$sql2="update content_master set p1='$contents' where topic_id=$idd";
					$result4=mysqli_query($con,$sql2);
					
					if($result4)
					{
						echo "Updated";
					}
					else
					{
						echo "not Updated";
					}

				}
				?>
				<!-- <input type="text" id="t1"> -->
				<div class="" id="editbox">
					<div class="card-body">
						<!-- <button id="editcontent" class="btn btn-outline-info" >Edit</button> -->
						<input type="submit" name="editcontent" id="editcontent" class="btn btn-outline-info" value="Edit the Content" >
					</div>
					<div class="card-body"> 
						<textarea id="txtDesc" name="txtDesc" rows="5" cols="75">
						</textarea>
					</div>
				</div>

				

			</div>
			
		</div>
	</div>
</form>

<script type="text/javascript">
	$(".lbl").on("click",function() {

		var lbl = $(this).attr("id");
		var lid = lbl.substring(3);
		var id  = $("#txt"+lid).val();
		$("#idc").val(id);
			// alert(id);
			//document.getElementById("t1").value=id;
			$.ajax({
				url: "ajax2.php",
				method : "POST",
				data : "id="+id,
				success: function(result){
					$("#txtDesc").val(result);
				}
			});
		});
	</script>


	<script>
	// function for scrolling
	function myFunction() {
		var elmnt = document.getElementById("txtDesc");
		elmnt.scrollIntoView();
	}
</script>
<script type="text/javascript" src="jquery.min.js"></script>
</body>
<?php
  include "sidebar.php";
?>
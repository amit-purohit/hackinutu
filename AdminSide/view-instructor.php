<?php
	include "header.php";
?>

<div class="row" style="padding-left: 300px;">
	<div class="col-md-12">
		<div class="form-group">
				<div class="table">
					<table class="table table-bordered" border="1" >
                            <tbody class="">
                                <tr class="" style="background-color: lightblue;">
                                    <th>Instructor Name</th>
                                    <th>Email</th>
                                    <th>State</th>
                                    <th>Specialized In</th>
                                    <th>Course</th>
                                    <th>Approved</th>
                                </tr>
                            </tbody>
                            <?php
                              include "connection.php";

                              $sql = "select * from instructor_master";
                              $execute = mysqli_query($con, $sql);
                              while($row = mysqli_fetch_assoc($execute))
	                              {
	                              	?>
										<tr>
											<td><?php echo $row['instructor_name'];?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['state'];?></td>
											<td><?php echo $row['specialized_in'];?></td>
											<td><?php echo $row['course'];?></td>
											<td>
												<?php if($row['is_approved'] == 0){
													echo "<a href='instructor-approved.php?inst_id=$row[instructor_id]'>approve</a>";

												}
												else{
													echo "<a href='instructor-approved.php?inst_id=$row[instructor_id]'>Not approve</a>";
												}
												?>
											</td>
										</tr>

											<?php
										}
                            ?>
                        </table>
				</div>


		</div>
	</div>
</div>



<?php
	include "sidebar.php";
?>
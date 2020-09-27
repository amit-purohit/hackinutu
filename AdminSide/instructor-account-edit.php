<?php 
include "header.php";
?>
<head>
 <script
 src="https://code.jquery.com/jquery-3.4.1.min.js"
 integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
 crossorigin="anonymous"></script>
</head>

<div class="container-fluid page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
        <li class="breadcrumb-item active">Edit Instructors Account</li>
    </ol>

    <h1 class="h2">Edit Instructors Account</h1>

    <div class="card" style="width: 1000px;">
        <ul class="nav nav-tabs nav-tabs-card">
            <li class="nav-item">
                <a class="nav-link active" href="#first" data-toggle="tab">Account</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#second" data-toggle="tab">Billing</a>
            </li> -->
        </ul>
        <div class="tab-content card-body">
            <div class="tab-pane active" id="first">
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group row">
                        <input type="hidden" id="userid" name="userid" value="">
                        <label for="name" class="col-sm-3 col-form-label form-label">Full Name</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="name" name="name" type="text" class="form-control" placeholder="First Name" value="">
                                </div>
                                <!-- <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name" value="Bogdan">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label form-label">Email</label>
                        <div class="col-sm-6 col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons md-18 text-muted">mail</i>
                                    </div>
                                </div>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Email Address" value="">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="website" class="col-sm-3 col-form-label form-label">Website</label>
                        <div class="col-sm-6 col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons md-18 text-muted">language</i>
                                    </div>
                                </div>
                                <input type="text" id="website" class="form-control" placeholder="www."
                                value="learnplus.frontendmatter.com">
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label form-label">Change Password</label>
                        <div class="col-sm-6 col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons md-18 text-muted">lock</i>
                                    </div>
                                </div>
                                <input type="password" id="password" name="password" class="form-control"
                                placeholder="Enter new password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-3">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <!-- <a href="#" class="btn btn-success">Save Changes</a> -->
                                    <input type="submit" name="save" id="save" class="btn btn-success">
                                </div>
                                <div class="media-body pl-1">
                                    <div class="custom-control custom-checkbox">
                                        <input id="subscribe" type="checkbox" class="custom-control-input" checked>
                                        <label for="subscribe" class="custom-control-label">Subscribe to
                                        Newsletter</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="card-body">
                    <!-- <form method="POST" action=""> -->

                        <table class="table table-bordered" border="1" >
                            <tbody class="">
                                <tr class="" style="background-color: lightblue;">
                                    <th>Instructor id</th>
                                    <th>Instructor Name</th>
                                    <th>Email</th>
                                    <th>Specialized in</th>
                                    <th>Uploaded courses</th>
                                    <th>Password</th>
                                    <th>Approve</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>

                                <?php
                                error_reporting(1);

                                $sql2="select * from instructor_master";
                                $run2=mysqli_query($con,$sql2);

                                $counter=0;
                                while($result3=mysqli_fetch_array($run2))
                                {

                                    ?>
                                    <tr>
                                        <td><?php echo $result3['instructor_id'];?></td>
                                        <td><?php echo $result3['instructor_name'];?></td>
                                        <td><?php echo $result3['email'];?></td>
                                        <td><?php echo $result3['specialized_in'];?></td>
                                        <td><?php echo $result3['course'];?></td>
                                        <td><?php echo $result3['password'];?></td>
                                        <td>
                                            <?php if($result3['is_approved'] == 0)
                                               {
                                                    echo "<a href='approve_instructor?instructor_id=$result3[0]'>approve</a>";

                                                }
                                                else{
                                                    echo "<a href='approve_instructor?instructor_id=$result3[0]'>unapprove</a>";
                                                }
                                                ?>


                                        </td>
                                        <td>
                                            <input type="hidden" id="cedit<?php echo $counter;?>"  value="<?php echo $result3['instructor_id']; ?>">
                                            <button id="edit<?php echo $counter;?>"  class="ced"><i class="fa fa-edit" style="font-size:28px;color:blue"></i></button>
                                        </td>
                                        <td>
                                            <input type="hidden" id="delete" name="delete" value="<?php echo $result3['instructor_id']; ?>">


                                            <a href="instdel.php?id=<?php echo $result3[0]; ?>" onclick="return confirm('Do You want to delete?') " >
                                                <i  class="fa fa-trash" style="font-size:28px;color:blue"></i>
                                            </a>
                                        </td>

                                    </tr>
                                    <?php
                                    $counter++;     
                                }

                                ?>
                            </tbody>
                        </table>


                    </div>




                </div>

                <div class="tab-pane" id="second">
                    <form action="#" class="form-horizontal">
                        <div class="form-group row">
                            <label for="name_on_invoice" class="col-sm-3 col-form-label form-label">Name on
                            Invoice</label>
                            <div class="col-sm-6 col-md-4">
                                <input id="name_on_invoice" type="text" class="form-control" value="Adrian Demian">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="billing_address" class="col-sm-3 col-form-label form-label">Address</label>
                            <div class="col-sm-6 col-md-4">
                                <input id="billing_address" type="text" class="form-control"
                                value="Sunny Street, 21, Miami, Florida">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="billing_country" class="col-sm-3 col-form-label form-label">Country</label>
                            <div class="col-sm-6 col-md-4">
                                <select id="billing_country" class="custom-control custom-select form-control">
                                    <option value="1" selected>USA</option>
                                    <option value="2">India</option>
                                    <option value="3">United Kingdom</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 col-md-4 offset-sm-3">
                                <a href="#" class="btn btn-success"> Update Billing</a>
                            </div>
                        </div>
                    </form>
                    <div class="card mt-2">
                        <div class="card-header">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <h4 class="card-title">Payment Info</h4>
                                </div>
                                <div class="media-right">
                                    <a href="#" class="btn btn-sm btn-outline-primary"><i
                                        class="material-icons">add</i></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="card-footer p-0 list-group list-group-fit">
                                <li class="list-group-item active">
                                    <div class="media align-items-center">
                                        <div class="media-left">
                                            <span class="btn btn-primary btn-circle"><i
                                                class="material-icons">credit_card</i></span>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-0">**** **** **** 2422</p>
                                                <small>Updated on 12/02/2016</small>
                                            </div>
                                            <div class="media-right">
                                                <a href="#" class="btn btn-primary btn-sm">
                                                    <i class="material-icons btn__icon--left">edit</i> EDIT
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <span class="btn btn-white btn-circle"><i
                                                    class="material-icons">credit_card</i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0">**** **** **** 6321</p>
                                                    <small class="text-muted">Updated on 11/01/2016</small>
                                                </div>
                                                <div class="media-right">
                                                    <a href="#" class="btn btn-white btn-sm">
                                                        <i class="material-icons btn__icon--left">edit</i> EDIT
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <?php

            if(isset($_POST['save']))
            {
                $userid=$_POST['userid'];
                $username=$_POST['name'];
                $useremail=$_POST['email'];
                $password=$_POST['password'];

                $sql3="UPDATE instructor_master SET instructor_name='$username',email='$useremail',password='$password' WHERE instructor_id=$userid";
                //echo $sql3;
                $res=mysqli_query($con,$sql3);

                if($res)
                {
                    echo '<script>
                    alert("updated");
                    </script>';
                }
                else
                {
                    echo '<script>
                    alert("not updated");
                    </script>';
                }
            }




            ?>

                    <!-- <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                
                                            </div>
                                        </div>
                                    </div> -->
                                    <script type="text/javascript"> 


                                        $(".ced").on("click",function() {
                                            var lbl = $(this).attr("id");
                                            var lid = lbl.substring(4);

                                            var id  = $("#cedit"+lid).val();
        //$("#idc").val(id);
                // alert(id);


                $.ajax({
                    url: "ajax6.php",
                    method : "POST",
                    data : "id="+id,
                    //dataType: "json", 
                    success: function(data){
                        //alert(data);
                        var myobj=$.parseJSON(data);
                        // alert(myobj.que_id);
                        // $("#quee").val(myobj.user_id);
                        $("#name").val(myobj.instructor_name);
                        $("#email").val(myobj.email);
                        $("#password").val(myobj.password);
                        $("#userid").val(myobj.instructor_id);
                  
                    }
                });


            });

        </script>

        <?php include 'sidebar.php'; ?>
<?php
include "header.php";
?>
<head>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<div class="container-fluid page__container p-0">
    <div class="row m-0">
        <div class="col-lg container-fluid page__container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                <li class="breadcrumb-item active">Edit Account</li>
            </ol>

            <h1 class="h2">Enrollment</h1>

            <div class="card">
                <div class="list-group list-group-fit">
                    <div class="list-group-item">
                        <div class="form-group row mb-0">
                            <label class="col-form-label form-label col-sm-3">Your current enrolled course</label>
                            <div class="col-sm-9 d-flex align-items-center">
                               <input type="text" id="name" value="" disabled="">
                                <!-- <a href="student-account-billing-upgrade.html" class="text-secondary">Change plan</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row mb-0">
                            <label class="col-form-label form-label col-sm-3">Amount paid</label>
                            <div class="col-sm-9">
                                <input type="text" id="fees" value="" disabled="">
                                <!-- <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">
                                        <strong>Enable automatic renewal</strong>
                                    </label>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group row mb-0">
                            <label class="col-form-label form-label col-sm-3">Enrolled On</label>
                            <div class="col-sm-9 d-flex align-items-center">
                                <input type="text" id="date" value="" disabled="">
                                <!--                                 <img src="assets/images/visa.svg" alt="visa" width="40" class="mr-16pt"> -->
                               <!--  <div class="flex">Visa ending with 2819</div>
                                <a href="student-account-billing-payment-information.html" class="text-secondary">Change method</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="list-group-item">
                        <div class="form-group row mb-0">
                            <label class="col-form-label form-label col-sm-3">Payment information</label>
                            <div class="col-sm-9 d-flex align-items-center">
                                <img src="assets/images/visa.svg" alt="visa" width="40" class="mr-16pt">
                                <div class="flex">Visa ending with 2819</div>
                                <a href="student-account-billing-payment-information.html" class="text-secondary">Change method</a>
                            </div>
                        </div>
                    </div> -->
                   <!--  <div class="list-group-item">
                        <div class="form-group row mb-0">
                            <label class="col-form-label form-label col-sm-3">Cancel</label>
                            <div class="col-sm-9">
                                <a href="#" class="btn btn-outline-secondary">Cancel subscription</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="card-body">
                <!-- <form method="POST" action=""> -->

                    <table class="table table-bordered" border="1" >
                        <tbody class="">
                            <tr class="" style="background-color: lightblue;">
                                <th>User id</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>View Enrollment</th>
                            </tr>

                            <?php

                            $sql2="select * from user_master";
                            $run2=mysqli_query($con,$sql2);

                            $counter=0;
                            while($result3=mysqli_fetch_array($run2))
                            {

                                ?>
                                <tr>
                                    <td><?php echo $result3[0];?></td>
                                    <td><?php echo $result3[1];?></td>
                                    <td><?php echo $result3[2];?></td>

                                    <td>
                                        <input type="hidden" id="cedit<?php echo $counter;?>"  value="<?php echo $result3['user_id']; ?>">
                                        <button id="edit<?php echo $counter;?>"  class="ced btn btn-success">View</button>
                                    </td>
                                </tr>

                            </tr>
                            <?php
                            $counter++;     
                        }

                        ?>
                    </tbody>
                </table>


            </div>
        </div>
        <div id="page-nav" class="col-lg-auto page-nav">
            <div data-perfect-scrollbar>
                <div class="page-section pt-lg-32pt">
                    <ul class="nav page-nav__menu">
                        <li class="nav-item">
                            <a href="student-account-billing-subscription.html" class="nav-link active">Subscription</a>
                        </li>
                        <li class="nav-item">
                            <a href="student-account-billing-upgrade.html" class="nav-link">Upgrade Account</a>
                        </li>
                        <li class="nav-item">
                            <a href="student-account-billing-payment-information.html" class="nav-link">Payment Information</a>
                        </li>
                        <li class="nav-item">
                            <a href="student-billing.html" class="nav-link">Payment History</a>
                        </li>
                        <li class="nav-item">
                            <a href="student-invoice.html" class="nav-link">Invoice</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 


    $(".ced").on("click",function() {
        var lbl = $(this).attr("id");
        var lid = lbl.substring(4);

        var id  = $("#cedit"+lid).val();
        //$("#idc").val(id);
        //alert(id);

if(id != null )
{
        $.ajax({
            url: "ajax5.php",
            method : "POST",
            data : "id="+id,
                    //dataType: "json", 
                    success: function(data){
                        //alert(data);
                        var myobj=$.parseJSON(data);
                        // alert(myobj.que_id);
                        // $("#quee").val(myobj.user_id);
                        $("#name").val(myobj.course_name);
                        $("#date").val(myobj.enroll_date);
                        $("#fees").val(myobj.fees);
                        $("#userid").val(myobj.user_id);
                        

                        
                    }
                });
}
        else
        {
            swal("This user has not yet enrolled for any course");
        }
    });


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</script>
<?php
include 'sidebar.php';
?>

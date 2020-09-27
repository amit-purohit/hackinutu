<?php
include 'hhh.php';
?>
<div class="container-fluid page__container p-0">
    <div class="row m-0">
        <div class="col-lg container-fluid page__container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                <li class="breadcrumb-item active">Edit Account</li>
            </ol>
            <h1 class="h2">Basic Information</h1>
            <div class="card">
                <div class="list-group list-group-fit">
                    <div class="list-group-item">
                        <div class="form-group m-0" role="group" aria-labelledby="label-firstname">
                            <div class="form-row">
                                <label id="label-firstname" for="firstname" class="col-md-3 col-form-label form-label">First name</label>
                                <div class="col-md-9">
                                    <input id="firstname" type="text" placeholder="Your first name" value="Alexander" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group m-0" role="group" aria-labelledby="label-lastname">
                            <div class="form-row">
                                <label id="label-lastname" for="lastname" class="col-md-3 col-form-label form-label">Last name</label>
                                <div class="col-md-9">
                                    <input id="lastname" type="text" placeholder="Your last name" value="Watson" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group m-0" role="group" aria-labelledby="label-email">
                            <div class="form-row">
                                <label id="label-email" for="email" class="col-md-3 col-form-label form-label">Your email address</label>
                                <div class="col-md-9">
                                    <div role="group" class="input-group input-group-merge">
                                        <input id="email" type="email" placeholder="Your email address" value="alexander.watson@gmail.com" class="form-control form-control-prepended">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="material-icons">email</i>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Note that if you change your email, you will have to confirm it again.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h4>Change Password</h4>

            <div class="alert alert-light border-1 border-left-3 border-left-primary d-flex">
                <i class="material-icons text-success mr-3">check_circle</i>
                <div class="text-body">An email with password reset instructions has been sent to your email address, if it exists on our system.</div>
            </div>

            <div class="card">
                <div class="list-group list-group-fit">
                    <div class="list-group-item">
                        <div class="form-group m-0" role="group" aria-labelledby="label-password">
                            <div class="form-row">
                                <label id="label-password" for="password" class="col-sm-3 col-form-label form-label">New password:</label>
                                <div class="col-sm-9">
                                    <div role="group" class="input-group input-group-merge form-control-prepended">
                                        <input id="password" type="password" required="required" placeholder="New password" aria-required="true" class="form-control form-control-prepended">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <span class="far fa-key"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="form-group m-0" role="group" aria-labelledby="label-password2">
                            <div class="form-row">
                                <label id="label-password2" for="password2" class="col-sm-3 col-form-label form-label">Confirm password:</label>
                                <div class="col-sm-9">
                                    <div role="group" class="input-group input-group-merge form-control-prepended">
                                        <input id="password2" type="password" required="required" placeholder="Confirm password" aria-required="true" class="form-control form-control-prepended">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <span class="far fa-key"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="page-nav" class="col-lg-auto page-nav">
            <div data-perfect-scrollbar>
                <div class="page-section pt-lg-32pt">
                    <ul class="nav page-nav__menu">
                        <li class="nav-item">
                            <a href="student-account-edit-basic.html" class="nav-link active">Basic Information</a>
                        </li>
                        <li class="nav-item">
                            <a href="student-account-edit-profile.html" class="nav-link">Profile &amp; Privacy</a>
                        </li>
                    </ul>
                    <div class="page-nav__content">
                        <button class="btn btn-success">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

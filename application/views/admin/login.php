<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>


    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?php echo base_url() . 'assets/fonts/material-icon/css/material-design-iconic-font.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/login.css'; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>




</head>

<body>

    <div class="main">

        <div class='container' style="padding-top: 10px">

            <div class="row">
                <div>
                    <?php
                    //success alert
                    $success = $this->session->userdata('error');
                    if ($success != "") { ?>

                    <div class="alert alert-success"><?php echo $success ?></div>

                    <?php } ?>


                    <?php
                    //failure alert
                    $failure = $this->session->userdata('failure');
                    if ($failure != "") { ?>

                    <div class="alert alert-success"><?php echo $failure ?></div>

                    <?php } ?>



                </div>
            </div>

            <!-- Sing in  Form -->
            <section class="sign-in">
                <div class="container">

                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="<?php echo base_url() . 'assets/images/signin-image.jpg'; ?>"
                                    alt="sing up image"></figure>
                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Admin Sign In</h2>
                            <form method="POST" class="register-form" id="login-form"
                                action="<?php echo base_url()."Auth/adminAuth"?>">

                                <!-- password -->
                                <div class="form-group" style="margin-bottom: 10px; margin-top: 20px">
                                    <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="password"
                                        value="<?php echo set_value('password');?>" placeholder="Password" />
                                </div>
                                <?php echo form_error('password'); ?>

                                <!-- Submit Button -->
                                <div class="form-group form-button">
                                    <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>

        </div>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- font Icon -->
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
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">

                <div style="display: flex; justify-content:flex-end; margin: 10px; padding-top: 10px">
                    <a href="<?php echo base_url(). "Auth/adminAuth"?>" class=" btn btn-primary">Admin</a>
                </div>

                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>

                        <form method="post" class="register-form" id="register-form"
                            action="<?php base_url(). "Auth/signup"?>">
                            <div class="form-group" style="margin-bottom: 10px;">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" value="<?php echo set_value('name');?>"
                                    placeholder="Your Name" />
                            </div>
                            <?php echo form_error('name'); ?>

                            <div class="form-group" style="margin-bottom: 10px; margin-top: 20px">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" value="<?php echo set_value('email');?>"
                                    placeholder="Your Email" />
                            </div>
                            <?php echo form_error('email'); ?>
                            <div class="form-group" style="margin-bottom: 10px; margin-top: 20px"">
                                <label for=" phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="tel" name="phone" id="phone" value="<?php echo set_value('phone');?>"
                                    placeholder="Phone Number" />
                            </div>
                            <?php echo form_error('phone'); ?>


                            <div class="form-group" style="margin-bottom: 10px; margin-top: 20px"">
                                <select class=" form-select" name="branch" aria-label="Default select example"
                                value="<?php echo set_value('branch');?>" id="branch">
                                <option value="CM">Computer Science</option>
                                <option value="IT">Information Technology</option>
                                <option value="XT">Electronics</option>
                                <option value="EE">Electrical</option>
                                <option value="ME">Mechanical</option>
                                <option value="CE">Civil</option>
                                </select>
                                <?php echo form_error('branch');?>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />

                                <a href="<?php echo base_url(). 'Auth/login'?>" class="btn btn-secondary btn-lg"
                                    style="margin-left: 10px; padding-top: 15px; padding-bottom: 15px; padding-left: 40px; padding-right: 40px; font-size: 15px">Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url() . 'assets/images/signup-image.jpg'; ?>"
                                alt="SignUp Image"></figure>
                    </div>
                </div>
            </div>
        </section>
    </div>


</body>

</html>
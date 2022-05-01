<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/student_dashboard.css'; ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/card.css'; ?>">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?php echo base_url() . 'assets/fonts/material-icon/css/material-design-iconic-font.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/login.css'; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>




    <title>Dashboard</title>
</head>

<body class="home">

    <div class="container-fluid display-table">
        <div class="row display-table-row">

            <div class="row">

                <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation"
                    style="height: 100vh ">

                    <div class="navi">
                        <ul>
                            <li><a href="<?php echo base_url() . 'StudentDashboard/index' ?>"><i class=" fa fa-home"
                                        aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>

                            <li><a href="<?php echo base_url() . 'StudentDashboard/Profile' ?>><i class=" fa fa-user"
                                    aria-hidden="true"></i><span class="hidden-xs hidden-sm">
                                        Profile</span></a></li>

                            <li class="active"><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span
                                        class="hidden-xs hidden-sm">Change Password</span></a></li>

                            <li><a href="<?php echo base_url() . 'Auth/logout' ?>
"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>

                        </ul>
                    </div>



                </div>


                <div
                    style="width:83.1% ; height: 100%;  display:flex; align-items: center; align-content: center; justify-content: center;">

                    <div style="width: 600px; height: 500px; background-color: #add8e6

; border-radius: 12px; align-items: center; align-content: center; justify-content: center;">
                        <h1 style="text-align: center; color: black; margin-top: 30px">Change Password</h1>
                        <hr style="color: white; height: 2px;">

                        <form action="<?php echo base_url() . 'StudentDashboard/updatePassword' ?>" method="post">

                            <div
                                style="width: 400px; text-align: start; align-items: center; border-radius: 8px; margin-left: 80px; margin-top: 80px; font-size: 16px">
                                <h3 style="margin-left: 5px; color: black;">Password</h3>
                                <input type="text" placeholder="Enter Password Here" name="password"
                                    value="<?php echo set_value('password'); ?>" style="border-radius: 8px;"></input>
                                <?php echo form_error('password') ?>

                            </div>

                            <div class="form-group form-button" style=" text-align: center; margin-top: 30px">
                                <input style="text-align: center; font-size: 14px;  padding: 10px" type="submit"
                                    name="signup" id="signup" class="form-submit" value="Update" />
                            </div>

                        </form>

                    </div>
                </div>
            </div>





        </div>





    </div>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/admin_dashboard.css'; ?>">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/admin_dashboard_table.css' ?>">
    <title>Admin</title>

</head>

<!-- Body -->

<body class="home">




    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <!-- Navigation Menu -->
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation"
                style="height: 200vh ">
                <!-- Navigation Items -->
                <div class="navi">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span
                                    class="hidden-xs hidden-sm">Home</span></a></li>

                        <li><a href="<?php echo base_url() . 'Admin/addEvent' ?>"><i class="fa fa-home"
                                    aria-hidden="true"></i><span class="hidden-xs hidden-sm">Event</span></a></li>

                        <li><a href="<?php echo base_url() . 'Admin/logout' ?>"><i class="fa fa-cog"
                                    aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <div id="content">


                        <!-- Screen  -->
                        <div class="user-dashboard"
                            style="display: flexbox; justify-content: center; align-items: center">

                            <!-- Page content -->
                            <div class="container-fluid mt--7"
                                style="display: flexbox; justify-content: center; align-items: center; margin-left: 200px; margin-top: 50px">

                                <div class="col-xl-8 order-xl-4" style="width: 1000px; ">
                                    <div class="card bg-secondary shadow">
                                        <div class="card-header bg-white border-0" style="background-color: white;">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h3 class="mb-0">Add Event</h3>
                                                    <hr>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-body" style="background-color: white;">



                                            <form action="<?php base_url(). 'Admin/addEvent'?>" method="POST">
                                                <div class="pl-lg-2">

                                                    <?php echo form_error('event'); ?>

                                                    <!-- Event Name  -->
                                                    <div class="col-lg-12" style="margin-right: 1px;">
                                                        <div class="form-group focused">
                                                            <label class="form-control-label" for="input-username">Event
                                                                Name</label>
                                                            <input type="text" id="input-username"
                                                                style="color: black; font-weight: 600"
                                                                class="form-control form-control-alternative"
                                                                name="event" placeholder="Event Name" value="<?php echo set_value('event');
                                                                                                        ?>">




                                                        </div>

                                                    </div>


                                                    <!-- Event Description -->
                                                    <div class="col-lg-12" style="margin-bottom: 20px;">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="input-email">Description</label>
                                                            <input type="description"
                                                                class="form-control form-control-alternative"
                                                                placeholder="description" name="description"
                                                                style="color: black; font-weight: 600; height: 40px"
                                                                name="description" value=" <?php echo set_value('description');
?>">
                                                        </div>
                                                    </div>

                                                    <div class="row"
                                                        style="margin-left: 1px; margin-top: 20px; text-align: center">

                                                        <!-- Select Branch -->
                                                        <select class="form-control" name="department" style="margin-left: 10px;
                                                            border-radius: 8px;
                                                            height: 30px;
                                                            width: 250px;
                                                            margin-left: 100px
                                                            ">



                                                            <option value="all">All Departments</option>
                                                            <?php if (count($departments)): ?>

                                                            <?php foreach ($departments as $departmentsKey => $departmentValue): ?>

                                                            <option
                                                                value=<?php echo $departmentsKey ?><?php echo set_select('department', $departmentsKey) ?>>
                                                                <?php echo $departmentValue ?>
                                                            </option>

                                                            <?php endforeach;?> <?php endif;?>
                                                        </select>

                                                        <!-- Select Year -->
                                                        <select class="form-control" name="year" style="margin-left: 10px;
                                                border-radius: 8px;
                                                height: 30px;
                                                width: 250px
                                                ">

                                                            <option value="all">All</option>

                                                            <?php if (count($years)): ?>

                                                            <?php foreach ($years as $yearsValue): ?>

                                                            <option
                                                                value=<?php echo $yearsValue ?><?php echo set_select('year', $yearsValue) ?>>
                                                                <?php echo $yearsValue ?>
                                                            </option>

                                                            <?php endforeach;?> <?php endif;?>

                                                        </select>
                                                    </div>

                                                    <!-- Submit Button -->
                                                    <div class="form-group form-submit"
                                                        style="text-align: center; margin-top: 30px">
                                                        <input type="submit" name="signin" id="signin"
                                                            class="btn btn-primary" value="Add Event"
                                                            style="padding: 10px; font-size: 12px" />
                                                    </div>


                                                </div>
                                                <hr class="my-4">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

</body>

</html>
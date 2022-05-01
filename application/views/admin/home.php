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
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span
                                    class="hidden-xs hidden-sm">Home</span></a></li>

                        <li><a href="<?php echo base_url() . 'Admin/addEvent' ?>"><i class="fa fa-home"
                                    aria-hidden="true"></i><span class="hidden-xs hidden-sm">Event</span></a></li>

                        <li><a href="<?php echo base_url() . 'Admin/logout' ?>"><i class="fa fa-cog"
                                    aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-10 col-sm-11 display-table-cell v-align">


                <h1 style='text-align: center; color: black; font-size: large; padding-top: 20px '>Government
                    Polytechnic Amravati</h1>

                <hr>

                <div class="row" style="width: 600px; padding-left: 100px; display:inline - block; padding-top: 20px ">
                    <div>
                        <?php
                            //success alert
                            $success = $this->session->userdata('success');
                            if ($success != "") {?>

                        <div class="alert alert-success"><?php echo $success ?></div>

                        <?php }?>


                        <?php
                            //failure alert
                            $failure = $this->session->userdata('failure');
                            if ($failure != "") {?>

                        <div class="alert alert-success"><?php echo $failure ?></div>

                        <?php }?>



                    </div>
                </div>

                <div>
                    <section style="padding-top: 20px">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-wrap" style="align-content: flex-end;">

                                        <!-- Filter  -->
                                        <form method="POST" class="form-inline"
                                            action="<?php echo base_url() . 'Admin/index'; ?>"
                                            style="align-content: flex-end;" method="post">
                                            <!-- Search View -->
                                            <input class="form-control" type="text" name="search"
                                                value="<?php echo set_value('search'); ?>" placeholder="Search Name"
                                                style="
                                                    width: 300px;
                                                    height: 30px;
                                                    border-radius: 6px;
                                                    font-size: 12px;
                                                    color: black;

                                                ">

                                            <!-- Select Branch -->
                                            <select class="form-control" name="department" style="margin-left: 10px;
                                                border-radius: 8px;
                                                height: 30px
                                                ">



                                                <option value="all">All Departments</option>
                                                <?php if (count($dropDownDepartments)): ?>

                                                <?php foreach ($dropDownDepartments as $departmentsKey => $departmentValue): ?>

                                                <option
                                                    value=<?php echo $departmentsKey ?><?php echo set_select('department', $departmentsKey) ?>>
                                                    <?php echo $departmentValue ?>
                                                </option>

                                                <?php endforeach;?> <?php endif;?>
                                            </select>

                                            <!-- Select Year -->
                                            <select class="form-control" name="year" style="margin-left: 10px;
                                                border-radius: 8px;
                                                height: 30px
                                                ">

                                                <option value="all">All</option>

                                                <?php if (count($dropDownYears)): ?>

                                                <?php foreach ($dropDownYears as $yearsValue): ?>

                                                <option
                                                    value=<?php echo $yearsValue ?><?php echo set_select('year', $yearsValue) ?>>
                                                    <?php echo $yearsValue ?>
                                                </option>

                                                <?php endforeach;?> <?php endif;?>

                                            </select>

                                            <!-- Apply Filter Button -->
                                            <input class="btn btn-primary" type="submit" name="filter" value="Apply"
                                                style="font-size: 12px; margin-left: 20px; border-radius: 3px; text-align: right">
                                        </form>

                                        <table class="table" style="margin-top: 20px">
                                            <thead class="thead-primary">
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Department</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody style='padding-top: 10px '>
                                                <?php if (!empty($students)) {foreach ($students as $student) {?>

                                                <tr>
                                                    <td><?php echo $student['idcode'] ?></td>
                                                    <td><?php echo $student['name'] ?></td>
                                                    <td><?php echo $student['email'] ?></td>
                                                    <td><?php echo $student['phone'] ?></td>
                                                    <td><?php echo $student['branch'] ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'Admin/updateStudent/' . $student['id'] ?>"
                                                            style="font-size: 12px; border-radius: 5px"
                                                            class="btn btn-primary"> Update
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'Admin/deleteUser/' . $student['id'] ?>"
                                                            style="font-size: 12px;  border-radius: 5px"" class=" btn
                                                            btn-danger">Delete</a>
                                                    </td>



                                                    <?php }} else {?>
                                                <tr>
                                                    <td colspan="5" style="color: red; font-size: 15px;">
                                                        Record not found
                                                    </td>
                                                </tr>

                                                <?php }?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
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

    <title>Dashboard</title>
</head>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation"
                style="height: 200vh ">

                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span
                                    class="hidden-xs hidden-sm">Home</span></a></li>

                        <li><a href="<?php echo base_url() . 'StudentDashboard/profile' ?>"><i class="fa fa-user"
                                    aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>

                        <li><a href="<?php echo base_url() . 'StudentDashboard/changePassword' ?>"><i
                                    class="fa fa-calendar" aria-hidden="true"></i>Change Password</a></li>

                        <li><a href="<?php echo base_url() . 'Auth/logout' ?>
"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <div id="content">


                        <!-- Screen  -->
                        <div class="user-dashboard">
                            <!-- Content -->
                            <div class="col-md-10 col-sm-11 display-table-cell v-align">


                                <h1 style='text-align: center; color: black; font-size: large; padding-top: 20px '>
                                    All Events </h1>

                                <hr>

                                <div class="row"
                                    style="width: 600px; padding-left: 100px; display:inline - block; padding-top: 20px ">
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

                                                        <!-- Table -->
                                                        <table class="table" style="margin-top: 20px">
                                                            <thead class="thead-primary">
                                                                <tr>

                                                                    <th>Date</th>
                                                                    <th>Name</th>
                                                                    <th>Description</th>


                                                                </tr>
                                                            </thead>
                                                            <tbody style='padding-top: 10px '>
                                                                <?php if (!empty($events)) {foreach ($events as $student) {?>

                                                                <tr>

                                                                    <td><?php echo $student['date'] ?></td>
                                                                    <td><?php echo $student['event'] ?></td>
                                                                    <td><?php echo $student['description'] ?>

                                                                    </td>




                                                                    <?php }} else {?>
                                                                <tr>
                                                                    <td colspan="5"
                                                                        style="color: red; font-size: 15px;">
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

</body>

</html>
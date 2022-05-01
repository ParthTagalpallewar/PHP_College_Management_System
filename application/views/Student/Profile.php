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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


    <title>Dashboard</title>
</head>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation"
                style="height: 200vh ">

                <div class="navi">
                    <ul>
                        <li> <a href="<?php echo base_url() . 'StudentDashboard/index' ?>"><i class="fa fa-home"
                                    aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>

                        <li class="active"><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span
                                    class="hidden-xs hidden-sm">Profile</span></a></li>

                        <li><a href="<?php echo base_url() . 'StudentDashboard/changePassword' ?>"><i
                                    class="fa fa-calendar" aria-hidden="true"></i>Change Password</a></li>

                        <li><a href="<?php echo base_url() . 'Auth/logout' ?>"><i class="fa fa-cog"
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
                                                    <h3 class="mb-0">My account</h3>
                                                    <hr>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-body" style="background-color: white;">

                                            <h6 class="heading-small text-muted mb-4">User information</h6>

                                            <div class="pl-lg-2">

                                                <!-- User Name  -->
                                                <div class="col-lg-10" style="margin-right: 1px;">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label"
                                                            for="input-username">Username</label>
                                                        <input type="text" id="input-username"
                                                            style="color: black; font-weight: 600"
                                                            class="form-control form-control-alternative"
                                                            placeholder="Username"
                                                            value="<?php echo $student['name']?>">
                                                    </div>
                                                </div>
                                                <!-- Email -->
                                                <div class="col-lg-10">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-email">Email
                                                            address</label>
                                                        <input type="email" id="input-email"
                                                            class="form-control form-control-alternative"
                                                            placeholder="jesse@example.com"
                                                            style="color: black; font-weight: 600"
                                                            value="<?php echo $student['email']?>">
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-left: 1px;">
                                                    <!-- Id Code -->
                                                    <div class="col-lg-5">
                                                        <div class="form-group focused">
                                                            <label class="form-control-label" for="input-first-name">ID
                                                                CODE</label>
                                                            <input type="text" id="input-first-name"
                                                                class="form-control form-control-alternative"
                                                                placeholder="First name"
                                                                style="color: black; font-weight: 600"
                                                                value="<?php echo $student['idcode']?>">
                                                        </div>
                                                    </div>
                                                    <!-- Password -->
                                                    <div class="col-lg-5">
                                                        <div class="form-group focused">
                                                            <label class="form-control-label" for="input-last-name">Last
                                                                name</label>
                                                            <input type="text" id="input-last-name"
                                                                class="form-control form-control-alternative"
                                                                placeholder="Last name"
                                                                style="color: black; font-weight: 600"
                                                                value="<?php echo $student['password']?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-left: 1px;">
                                                    <!-- Phone -->
                                                    <div class="col-lg-5">
                                                        <div class="form-group focused">
                                                            <label class="form-control-label"
                                                                for="input-first-name">Phone</label>
                                                            <input type="text" id="input-first-name"
                                                                class="form-control form-control-alternative"
                                                                placeholder="First name"
                                                                style="color: black; font-weight: 600"
                                                                value="<?php echo $student['phone']?>">
                                                        </div>
                                                    </div>
                                                    <!-- Department -->
                                                    <div class="col-lg-5">
                                                        <div class="form-group focused">
                                                            <label class="form-control-label"
                                                                for="input-last-name">Department
                                                            </label>
                                                            <input type="text" id="input-last-name"
                                                                class="form-control form-control-alternative"
                                                                placeholder="Last name"
                                                                style="color: black; font-weight: 600"
                                                                value="<?php echo $student['branch']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

</body>

</html>
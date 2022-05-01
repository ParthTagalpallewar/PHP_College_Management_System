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

    <script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
    <script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.28214" type="text/javascript"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
    <script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.28214" type="text/javascript"></script>
    <script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.28214" type="text/javascript">
    </script>
    <script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.28214" type="text/javascript">
    </script>
    <script type="text/javascript">
    JotForm.newDefaultTheme = true;
    JotForm.extendsNewTheme = false;
    JotForm.newPaymentUIForNewCreatedForms = false;
    JotForm.newPaymentUI = true;

    JotForm.init(function() {
        /*INIT-START*/
        if (window.JotForm && JotForm.accessible) $('input_5').setAttribute('tabindex', 0);
        if (window.JotForm && JotForm.accessible) $('input_8').setAttribute('tabindex', 0);
        JotForm.setPhoneMaskingValidator('input_30_full', '(###) ###-####');
        /*INIT-END*/
    });

    JotForm.prepareCalculationsOnTheFly([null, null, {
        "name": "submit",
        "qid": "2",
        "text": "Submit",
        "type": "control_button"
    }, null, null, {
        "name": "title",
        "qid": "5",
        "text": "Title",
        "type": "control_textbox"
    }, null, null, {
        "name": "department",
        "qid": "8",
        "text": "Department",
        "type": "control_textbox"
    }, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, {
        "name": "clientQuestionnaire",
        "qid": "24",
        "text": "Client Questionnaire",
        "type": "control_head"
    }, null, {
        "name": "name26",
        "qid": "26",
        "text": "Name",
        "type": "control_fullname"
    }, null, null, {
        "name": "email29",
        "qid": "29",
        "subLabel": "example@example.com",
        "text": "Email",
        "type": "control_email"
    }, {
        "name": "phoneNumber",
        "qid": "30",
        "text": "Phone Number",
        "type": "control_phone"
    }]);
    setTimeout(function() {
        JotForm.paymentExtrasOnTheFly([null, null, {
                "name": "submit",
                "qid": "2",
                "text": "Submit",
                "type": "control_button"
            }, null, null, {
                "name": "title",
                "qid": "5",
                "text": "Title",
                "type": "control_textbox"
            }, null, null, {
                "name": "department",
                "qid": "8",
                "text": "Department",
                "type": "control_textbox"
            }, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            {
                "name": "clientQuestionnaire",
                "qid": "24",
                "text": "Client Questionnaire",
                "type": "control_head"
            },
            null, {
                "name": "name26",
                "qid": "26",
                "text": "Name",
                "type": "control_fullname"
            },
            null, null, {
                "name": "email29",
                "qid": "29",
                "subLabel": "example@example.com",
                "text": "Email",
                "type": "control_email"
            }, {
                "name": "phoneNumber",
                "qid": "30",
                "text": "Phone Number",
                "type": "control_phone"
            }
        ]);
    }, 20);
    </script>
    <style type="text/css">
    @media print {
        .form-section {
            display: inline !important
        }

        .form-pagebreak {
            display: none !important
        }

        .form-section-closed {
            height: auto !important
        }

        .page-section {
            position: initial !important
        }
    }
    </style>
    <link type="text/css" rel="stylesheet"
        href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402" />
    <link type="text/css" rel="stylesheet"
        href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.28214" />
    <link type="text/css" rel="stylesheet"
        href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.28214" />

    <script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.28214"></script>
    <script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.28214"></script>

    <title>Document</title>
</head>

<body>




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

                        <li><a href="<?php echo base_url(). 'Admin/logout'?>"><i class="fa fa-cog"
                                    aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                    </ul>
                </div>
            </div>




            <div class="container" style="padding-top: 10px;">

                <h3 style="text-align: center;">Update Student</h3>
                <hr>
                <form method="post" name="createUser"
                    action="<?php echo base_url() . 'Admin/updateStudentData/' . $student['id']; ?>">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="<?php echo $student['name'] ?>"
                                    class="form-control">

                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="<?php echo $student['email'] ?>"
                                    class="form-control">

                            </div>


                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" value="<?php echo $student['phone']; ?>"
                                    class="form-control">

                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="<?php echo $student['password']; ?>"
                                    class="form-control">

                            </div>

                            <div class="form-group" style="padding-top: 10px;">
                                <button class="btn btn-primary">Update</button>
                                <a href="<?php echo base_url() . 'Admin/index'; ?>" class="btn-secondary btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>


</body>

</html>
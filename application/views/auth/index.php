<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login System <br>
                                            <small>Silahkan login pada sistem untuk mengakses dashboard program studi Sistem Informasi</small>
                                        </h1>
                                    </div>

                                    <?php echo form_open("Auth/", array('method' => 'POST', 'class' => 'login-form')); ?>

                                    <div class="form-group">
                                        <div class="text-left"><?php echo form_error('username'); ?></div>
                                        <?php echo form_input(array('type' => 'text', 'class' => 'form-control form-control-user', 'placeholder' => 'Username', 'name' => 'username', 'id' => 'username')); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="text-left"> <?php echo form_error('password'); ?> </div>
                                        <?php echo form_input(array('type' => 'password', 'class' => 'form-control form-control-user', 'placeholder' => 'Password', 'name' => 'password', 'id' => 'password')); ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <button class="btn btn-danger btn-sm" style="width: 100%;" type="submit"> Masuk</button>
                                        </div>
                                    </div>
                                    <div class="row m-t-15 m-b--20">
                                        <label class="text-left">
                                            <?php
                                            $message = $this->session->flashdata('result_login');
                                            if ($message) { ?>
                                                <div style="color: red;"><?php echo $message; ?></div>
                                            <?php } ?>
                                        </label>
                                    </div>
                                    <?php echo form_close(); ?>




                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Dashboard Sistem Informasi Politeknik Caltex Riau</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>
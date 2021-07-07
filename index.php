<?php require 'config/config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./public/plugins/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="<?php echo (PUBLICPATH . 'plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo (PUBLICPATH . 'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo (PUBLICPATH . 'plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo (PUBLICPATH . 'plugins/jqvmap/jqvmap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo (PUBLICPATH . 'dist/css/adminlte.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo (PUBLICPATH . 'plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo (PUBLICPATH . 'plugins/daterangepicker/daterangepicker.css') ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo (PUBLICPATH . 'plugins/summernote/summernote-bs4.css') ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <title><?php echo APPNAME ?> | Sign In</title>
</head>
<body>
    <main class="mb-5">
        <header class="mb-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><?php echo APPNAME ?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin">admin</a>
                        </li>
                    </div>
                </div>
            </nav>
        </header>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6 col-lg-4 mx-auto">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                            <h3 class="card-title">Log In</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                </div> <!-- row -->
            <div> <!-- container-fluid -->
        <section> <!-- content -->
    </main>

    <footer class="main-footer text-center">
        <p class=""><strong>Copyright &copy; 2014-2019 <a href=""><?php echo APPNAME ?></a>.</strong></p>
        <p> All rights reserved.</p>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo(PUBLICPATH . 'plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo(PUBLICPATH . 'plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html>
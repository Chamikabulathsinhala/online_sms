<?php
session_start();
require "connection/connection.php";
if (isset($_SESSION["userDetails"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="img/logo2 (2).png" rel="icon">
        <title>Academic Registration</title>
        <link href="css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php require "sidebar.php"; ?>
            <div>
            </div>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <div class="row">

                    <!-- Main Content -->
                    <div class="col-12 bg-danger">

                        <section class="vh-100" style="background-color: #eee;">
                            <div class="container h-100">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-lg-12 col-xl-11">
                                        <div class="card text-black" style="border-radius: 25px;">
                                            <div class="card-body p-md-5">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-10 col-lg-6 col-xl-12 order-2 order-lg-1">

                                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Academic Registration</p>

                                                        <div class=" align-items-center mb-4 row">
                                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0 col-12 col-lg-5">
                                                                <input type="text" id="fname" class="form-control" />
                                                                <label class="form-label" for="form3Example1c">First Name</label>
                                                            </div>
                                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0 col-12 col-lg-5">
                                                                <input type="text" id="lname" class="form-control" />
                                                                <label class="form-label" for="form3Example1c">Last Name</label>
                                                            </div>
                                                        </div>

                                                        <div class=" align-items-center mb-4 row">
                                                            <i class="fas fa-address-book fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0 col-12 col-lg-5">
                                                                <input type="text" id="nic" class="form-control" />
                                                                <label class="form-label" for="form3Example1c">NIC</label>
                                                            </div>
                                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0 col-12 col-lg-5">
                                                                <input type="text" id="email" class="form-control" />
                                                                <label class="form-label" for="form3Example1c">Email</label>
                                                            </div>
                                                        </div>

                                                        <div class=" align-items-center mb-4 row">
                                                            <i class="fas fa-address-book fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0 col-12 col-lg-5">
                                                                <input type="text" id="username" class="form-control" />
                                                                <label class="form-label" for="form3Example1c">Username</label>
                                                            </div>
                                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0 col-12 col-lg-5">
                                                                <input type="text" id="password" class="form-control" />
                                                                <label class="form-label" for="form3Example1c">Password</label>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                            <button onclick="academicRegistration();" type="button" class="btn btn-primary col-8">Register</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                    <!-- End of Main Content -->

                </div>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Bootstrap core JavaScript-->
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="js/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>

    </html>
<?php
} else {
    header("Location: signIn.php");
    exit();
}


?>
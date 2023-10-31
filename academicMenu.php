<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo.png" rel="icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body style="background-color: lightgreen">
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: darkblue">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"><span>Academic</span></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="home.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User Management
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="teacherRegistration.php" data-toggle="" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user-astronaut"></i>
                <span>Add Teacher</span>
            </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="studentRegistration.php" data-toggle="" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-user-alt"></i>
                <span>Add Student</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Send Invitaions
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="sendInvitation.php?ut=1" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-link fa-folder"></i>
                <span>Invite Teacher</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="sendInvitation.php?ut=3" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-anchor fa-folder"></i>
                <span>Invite Student</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="sendInvitation.php?ut=2" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-thermometer fa-folder"></i>
                <span>Invite Academic</span>
            </a>
        </li>

        <!-- Nav Item - Charts -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <div class="sidebar-heading">
            Profile
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="updateProfile.php" data-toggle="" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-users"></i>
                <span>Update Profile</span>
            </a>
        </li>


        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Assignments
        </div>

        <!-- Nav Item - Pages Collapse Menu -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="UploadAssignment.php" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-book"></i>
                <span>Upload Assignment</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="viewAssignment.php" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-eye"></i>
                <span>View Assignment</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="submitMarks.php" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-eye"></i>
                <span>Submit Marks</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <button class="col-12 btn btn-danger" onclick="signout();">Sign Out</button>
            </a>
        </li>


    </ul>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
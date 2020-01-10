<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accounts Dashboard</title>
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/logo.jpg" alt="Logo" width="300" height="100">
</div>
<hr>
<div class="heading">
    <h4 class="text-center">Accounts  Dashboard</h4>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">eMobilis Mobile Technology Institute</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="#">Link 1</a>-->
<!--        </li>-->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="#">Link 2</a>-->
<!--        </li>-->

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Front Office
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="enquries.php">Enquiries</a>
                <a class="dropdown-item" href="registration.php">Registrations</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Accounts
            </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Billing</a>
            <a class="dropdown-item" href="#">Receipt</a>
        </div>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               Human Resource
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="staffDetails.php">Staff Details</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="staffDetails.php" id="navbardrop" data-toggle="dropdown">
                Users
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="locStaffUser.php">New User</a>
            </div>
        </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Reports
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Enquiries Report By Dates</a>
                <a class="dropdown-item" href="#">Registrations Report By Dates</a>
                <a class="dropdown-item" href="#">Invoices Report By Dates</a>
                <a class="dropdown-item" href="#">Payments Report By Dates</a>
                <a class="dropdown-item" href="#">Students Outstanding Balances</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
        </li>
    </ul>
    </div>
</nav>
</body>
</html>
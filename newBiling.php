<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing Success</title>
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
    <h3 class="text-center">Billing Success</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","emobilis");
    if(!$conn){
        die("Connection Error : " .mysqli_connect_error());
    }
    $studentAdmin=mysqli_real_escape_string($conn,$_POST['student_Admin']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $otherName=mysqli_real_escape_string($conn,$_POST['oNames']);
    $course=mysqli_real_escape_string($conn,$_POST['course']);
    $tuitionFee=mysqli_real_escape_string($conn,$_POST['tFees']);
    $regFee=mysqli_real_escape_string($conn,$_POST['regFees']);
    $hostelFee=mysqli_real_escape_string($conn,$_POST['hostelFees']);
    $libFee=mysqli_real_escape_string($conn,$_POST['libFees']);
    $totAmount=mysqli_real_escape_string($conn,$_POST['totAmount']);
    $sql="";

    ?>
</div>
</body>
</html>
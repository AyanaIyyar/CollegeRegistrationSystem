<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Success</title>
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
    <h3 class="text-center">Update Success</h3>
</div>
<hr>
<?php
    $conn=mysqli_connect("localhost","root","","emobilis");
    if (!$conn){
        die("Connection Error : " .mysqli_connect_error());
    }
    $studentAdmin=mysqli_real_escape_string($conn,$_POST['studAdmNo']);
    $regDate=mysqli_real_escape_string($conn,$_POST['regDate']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $otherName=mysqli_real_escape_string($conn,$_POST['oName']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $dateOfBirth=mysqli_real_escape_string($conn,$_POST['dob']);
    $postalAdd=mysqli_real_escape_string($conn,$_POST['postalAdd']);
    $telephone=mysqli_real_escape_string($conn,$_POST['tel_number']);
    $email=mysqli_real_escape_string($conn,$_POST['emailAdd']);
    $nok=mysqli_real_escape_string($conn,$_POST['nok']);
    $nokTel=mysqli_real_escape_string($conn,$_POST['nok_Tel']);
    $course=mysqli_real_escape_string($conn,$_POST['course']);
    $kcseM=mysqli_real_escape_string($conn,$_POST['kcse_mean']);
    $eduLevel=mysqli_real_escape_string($conn,$_POST['educationLevel']);
    $HschlAttd=mysqli_real_escape_string($conn,$_POST['Hschl_Attended']);
    $yearF=mysqli_real_escape_string($conn,$_POST['yearF']);
    $yearT=mysqli_real_escape_string($conn,$_POST['yearT']);
    $uniAttd=mysqli_real_escape_string($conn,$_POST['uniAttended']);
    $sql="UPDATE `registration` SET `registration_date`='$regDate',`first_name`='$firstName',`other_name`='$otherName',`gender`='$gender',`dob`='$dateOfBirth',`postal_address`='$postalAdd',`telephone_number`='$telephone',`email`='$email',`nok`='$nok',`nok_tel`='$nokTel',`course`='$course',`kcse_mean`='$kcseM',`education_level`='$eduLevel',`school_attended`='$HschlAttd',`year_from`='$yearF',`year_to`='$yearT',`university_attended`='$uniAttd' WHERE `student_admission_number`='$studentAdmin'";
    if ($conn->query($sql)==true){
        print "<p>Registration Update Successfully.</p>";
        print "<a href='#' class='btn btn-warning'>New Registration</a>";
    }
    else{
        print "<p>Registration Not Added.</p>";
        print "<a href='#' class='btn btn-outline-danger'>Try Again</a>";
    }
    mysqli_close($conn);
?>
</body>
</html>
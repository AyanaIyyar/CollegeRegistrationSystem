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
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","emobilis");
    if (!$conn){
        die("Connection Error : " . mysqli_connect_error());
    }
    $staffID=mysqli_real_escape_string($conn,$_POST['staffID']);
    $idPassNumber=mysqli_real_escape_string($conn,$_POST['idPassNo']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName=mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $position=mysqli_real_escape_string($conn,$_POST['position']);
    $department=mysqli_real_escape_string($conn,$_POST['dept']);
    $jDate=mysqli_real_escape_string($conn,$_POST['joinDate']);
    $bSalary=mysqli_real_escape_string($conn,$_POST['bSal']);
    $sql="UPDATE `staff_details` SET `staff_id`='$staffID',`first_name`='$firstName',`middle_name`='$middleName',`last_name`='$lastName',`gender`='$gender',`position`='$position',`department`='$department',`join_date`='$jDate',`basic_salary`='$bSalary' WHERE `idPass_number`='$idPassNumber'";
    if ($conn->query($sql)==true){
        print "<p>Staff Details Updated Successfully.</p>";
        print "<a href='staffDetails.php' class='btn btn-outline-info'>New/Update Staff</a>";
    }
    else{
        print "<p>Staff Details not Updated.</p>";
        print "<a href='staffDetails.php' class='btn btn-outline-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
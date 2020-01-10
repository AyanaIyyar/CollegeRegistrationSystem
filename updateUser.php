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
    $userID=mysqli_real_escape_string($conn,$_POST['uID']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName=mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
    $department=mysqli_real_escape_string($conn,$_POST['dept']);
    $username=mysqli_real_escape_string($conn,$_POST['uName']);
    $password=mysqli_real_escape_string($conn,$_POST['passwd']);
    $userGroup=mysqli_real_escape_string($conn,$_POST['uGroup']);
    $sql="UPDATE `users` SET `first_name`='$firstName',`middle_name`='$middleName',`last_name`='$lastName',`department`='$department',`username`='$username',`password`='$password',`user_group`='$userGroup' WHERE `user_id`='$userID'";
    if ($conn->query($sql)==true){
        print "<p>User Details Updated Successfully.</p>";
        print "<a href='locUserU.php' class='btn btn-info'>Update Another User</a>";
    }
    else{
        print "<p>User details Update Failed .</p>";
        print "<a href='locUserU.php' class='btn btn-warning'>Try Again</a>";

    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
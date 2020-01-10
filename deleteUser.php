<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Success</title>
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
    <h3 class="text-center">Delete Success</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","emobilis");
    if (!$conn){
        die("Connection Error :" . mysqli_connect_error());
    }
    $userID=mysqli_real_escape_string($conn,$_POST['uID']);
    $sql="DELETE FROM `users` WHERE user_id='$userID'";
    if ($conn->query($sql)==true){
        print "<p>User Deleted Successfully.</p>";
        print "<a href='locUserD.php' class='btn btn-outline-danger'>Delete Another User</a>";
    }
    else{
        print "<p>User Could not deleted.</p>";
        print "<a href='locUserD.php' class='btn btn-outline-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
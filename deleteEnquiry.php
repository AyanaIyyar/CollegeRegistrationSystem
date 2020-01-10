<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Enquiry</title>
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
    <h3 class="text-center">Delete Enquiry</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","emobilis");
    if (!$conn){
        die("Connection error : " .mysqli_connect_error());
    }
    $enquiryID=mysqli_real_escape_string($conn,$_POST['']);
    $sql="DELETE FROM `enquiries` WHERE enquiry_id='$enquiryID'";
    if ($conn->query($sql)==true){
        print "<p>Enquiry Deleted Successfully.</p>";
        print "<a href='locEnquiryD.php' class='btn btn-success'>Delete Enquiry</a>";
    }
    else{
        print "<p>Enquiry Not Deleted.</p>";
        print "<a href='locEnquiryD.php' class='btn btn-warning' >Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
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
    <h3 class="text-center">Success</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","emobilis");
    if (!$conn){
        die("Connection Error : ". mysqli_connect_error());
    }
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $otherName=mysqli_real_escape_string($conn,$_POST['oName']);
    $telephone=mysqli_real_escape_string($conn,$_POST['tel_number']);
    $emailAdd=mysqli_real_escape_string($conn,$_POST['emailAdd']);
    $course=mysqli_real_escape_string($conn,$_POST['course']);
    $knwabtUs=mysqli_real_escape_string($conn,$_POST['knw_abt_us']);
    $comments=mysqli_real_escape_string($conn,$_POST['comments']);
    $sql="INSERT INTO `enquiries`(`enquiry_id`, `enquiry_date`, `first_name`, `other_name`, `telephone_number`, `email`, `course`, `knw_abt_us`, `comments`)
 VALUES (null,null,'$firstName','$otherName','$telephone','$emailAdd','$course','$knwabtUs','$comments')";
    if ($conn->query($sql)==true){
        print "<p>New enquiry added successfully.</p>";
        print "<a href='enquries.php' class='btn btn-secondary'>New Enquiry</a>";
    }
    else{
        print "<p> Enquiry Not Added.</p>";
        print "<a href='enquries.php' class='btn btn-warning'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
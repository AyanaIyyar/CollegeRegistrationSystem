<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
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
    <h3 class="text-center">Invoice</h3>
</div>
<hr>
<form action="#" method="post">
    <label for=""><b>Student Admission Number:</b></label>
    <br>
    <input type="number" name="studAdmNo" class="form-control" required >
    <br>
    <label for=""><b>First Name:</b></label>
    <br>
    <input type="text" name="fName" class="form-control" required>
    <br>
    <label for=""><b>Other Names:</b></label>
    <br>
    <input type="text" name="oNames" class="form-control" required>
    <br>
    <label for=""><b>Course:</b></label>
    <br>
    <input type="text" name="course" class="form-control" required>
    <br>
    <label for=""><b>Tuition Fees:</b></label>
    <br>
    <input type="number" name="tFees" class="form-control" required value="<?php echo $tutFee;?>">
    <br>
    <label for=""><b>Registration Fees:</b></label>
    <br>
    <input type="number" name="regFees" class="form-control" required value="<?php echo $regFee;?>">
    <br>
    <label for=""><b>Hostel/ Accommodation Fees:</b></label>
    <br>
    <input type="number" name="hostelFees" class="form-control" required value="<?php echo $hostelFee;?>">
    <br>
    <label for=""><b>Library Fees:</b></label>
    <br>
    <input type="number" name="libFees" class="form-control" required value="<?php echo $libFee;?>">
    <br>
    <label for=""><b>Total Amount:</b></label>
    <br>
    <input type="number" name="totAmount" class="form-control" required value="<?php echo $tot;?>">
    <br>
    <div class="buttons">
        <input type="submit" name="send" value="Save" class="btn btn-success">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="send" value="Compute" class="btn btn-primary">
    </div>
</form>
</body>
</html>

<?php

switch ($_POST['send']){
    case 'Compute';
        $tutFee = $_POST['tFees'];
        $regFee = $_POST['regFees'];
        $hostelFee = $_POST['hostelFees'];
        $libFee = $_POST['libFees'];
        $tot = $tutFee + $regFee + $hostelFee + $libFee;
        break;


}

?>
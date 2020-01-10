<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Details</title>
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
    <h3 class="text-center">Staff Details</h3>
</div>
<hr>
<form action="newStaff.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>ID/Passport Number : </b></label>
                <br>
                <input type="text" name="idPassNo" class="form-control" placeholder="* ID/Passport Number Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>First Name : </b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Middle Name : </b></label>
                <br>
                <input type="text" name="mName" class="form-control" placeholder="* Middle Name Here" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Last Name : </b></label>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="* Last Name Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Gender : </b></label>
                <br>
                <input type="radio" name="gender" value="Male">&nbsp;Male
                <input type="radio" name="gender" value="Female">&nbsp;Female
            </div>
            <div class="col-sm-4">
                <label for=""><b>Position : </b></label>
                <br>
                <input type="text" name="position" class="form-control" placeholder="* Position Here" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Department : </b></label>
                <br>
                <select name="dept" id="" class="form-control" required>
                    <option value="ICT">ICT</option>
                    <option value="Administration">Administration</option>
                    <option value="Front Office">Front Office</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Management">Management</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Basic Salary : </b></label>
                <br>
                <input type="number" name="bSal" class="form-control" placeholder="* Basic Salary Here" required>
            </div>
            <div class="col-sm-4">
                <hr>
                <div class="buttons">
                    <button class="btn btn-success" type="submit">Add New</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="locStaffU.php" class="btn btn-warning">Update</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="locStaffD.php" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
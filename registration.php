<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
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
    <h3 class="text-center">Registration</h3>
</div>
<hr>
<form action="newRegistration.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>First Name : </b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Other Names : </b></label>
                <br>
                <input type="text" name="oName" class="form-control" placeholder="* Other Name Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Gender : </b></label>
                <br>
                <input type="radio" name="gender" value="Male">&nbsp;Male
                <input type="radio" name="gender" value="Female">&nbsp;Female
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Date Of Birth  : </b></label>
                <br>
                <input type="text" name="dob" class="form-control"required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Postal Address : </b></label>
                <br>
                <input type="text" name="postalAdd" class="form-control" placeholder="* Postal Address" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Telephone Number : </b></label>
                <br>
                <input type="number" name="tel_number" class="form-control" placeholder="* telephone number here" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Email Address : </b></label>
                <br>
                <input type="email" name="emailAdd" class="form-control" placeholder="* Email Address" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Next of Kin : </b></label>
                <br>
                <input type="text" name="nok" class="form-control" placeholder="*Next of kin" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Next of Kin Telephone : </b></label>
                <br>
                <input type="number" name="nok_Tel" class="form-control" placeholder="* nok Telephone Here" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Course:</b></label>
                <br>
                <select name="course" id="" class="form-control" required>
                    <option value="">======Select Course=====</option>
                    <option value="Concepts of MIT">Concepts of MIT</option>
                    <option value="Java">Java</option>
                    <option value="Kotlin">Kotlin</option>
                    <option value="Python">Python</option>
                    <option value="Android">Android</option>
                    <option value="Cyber Security">Cyber Security</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for=""><b>K.C.S.E Mean:</b></label>
                <br>
                <select name="kcse_mean" id="" class="form-control" required>
                    <option value="">=====Select Grade====</option>
                    <option value="A">A</option>
                    <option value="A-">A-</option>
                    <option value="B">B+</option>
                    <option value="B">B</option>
                    <option value="B-">B-</option>
                    <option value="C">C+</option>
                    <option value="C">C</option>
                    <option value="C">C-</option>
                    <option value="D">D+</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Education Level:</b></label>
                <br>
                <select name="educationLevel" id="" class="form-control" required>
                    <option value="">====Select Education Level Reached</option>
                    <option value="High School">High School</option>
                    <option value="College">College</option>
                    <option value="University">University</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
            <label for=""><b>School/Institution Attended:</b></label>
            <br>
            <input type="text" name="instAttd" class="form-control" placeholder="*Indicate school/institution attended" required>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Year From: : </b></label>
                <br>
                <input type="date" name="yearF" class="form-control" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Year To:</b></label>
                <br>
                <input type="date" name="yearT" class="form-control" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b> University Attended:</b></label>
                <br>
                <input type="text" name="uniAttended" class="form-control" placeholder="*College/University Attended Here">
            </div>
            </div>
            <div class="col-sm-4">
                <hr>
                <div class="buttons">
                    <button class="btn btn-success" type="submit">Add New</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="locRegU.php" class="btn btn-warning">Update</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="locRegD.php" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

</form>
</body>
</html>
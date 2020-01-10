<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiries</title>
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
    <h3 class="text-center">Enquiries</h3>
</div>
<hr>
<form action="newEnquiries.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>First Name:</b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="*First Name Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Other Names:</b></label>
                <br>
                <input type="text" name="oName" class="form-control" placeholder="*Middle Name Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Telephone Number:</b></label>
                <br>
                <input type="text" name="tel_number" class="form-control" placeholder="*Telephone Number Here" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Email Address:</b></label>
                <br>
                <input type="email" name="emailAdd" class="form-control" placeholder="*Email Address Here" required>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Course:</b></label>
                <br>
                <select name="course" id="" class="form-control">
                    <option value="">===============</option>
                    <option value="HTML">HTML</option>
                    <option value="BootStrap/CSS">BootStrap/CSS</option>
                    <option value="PHP">PHP</option>
                    <option value="Java">Java</option>
                    <option value="Kotlin">Kotlin</option>
                    <option value="Android">Android</option>
                    <option value="Python">Python</option>
                    <option value="Cyber Security">Cyber Security</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Know About Us:</b></label>
                <br>
                <select name="knw_abt_us" id="" class="form-control" required>
                    <option value="">============</option>
                    <option value="Newspaper">Newspaper</option>
                    <option value="Television">Television</option>
                    <option value="Student">Student</option>
                    <option value="Friend">Friend</option>
                    <option value="Alumini">Alumini</option>
                    <option value="Staff Member">Staff Member</option>
                    <option value="Social Media">Social Media</option>
                </select>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for=""><b>Comments:</b></label>
                    <br>
                    <textarea name="comments" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

                <div class="col-sm-6">
                    <hr>
                    <div class="buttons">
                        <button class="btn btn-primary" type="submit">Submit</button>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="locEnquiryU.php" class="btn btn-warning">Update</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="locEnquiryD.php" class="btn btn-danger">Delete</a>
                    </div>
                </div>
                </div>

        </div>
</form>
</body>
</html>
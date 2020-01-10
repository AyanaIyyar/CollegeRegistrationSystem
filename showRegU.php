<?php
$conn=mysqli_connect("localhost","root","","emobilis");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
$studentAdmin=mysqli_real_escape_string($conn,$_POST['studAdmNo']);
$sql="SELECT * FROM `registration` WHERE student_admission_number='$studentAdmin' ";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Registration Update</title>
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
            <h3 class="text-center">Registration Update</h3>
        </div>
        <hr>
        <form action="deleteRegistration.php" method="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>Student Admission Number : </b></label>
                        <br>
                        <input type="number" name="studAdmNo" class="form-control" required value="<?php echo $row['student_admission_number']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Registration Date : </b></label>
                        <br>
                        <input type="date" name="regDate" class="form-control" required value="<?php echo $row['registration_date']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>First Name :</b></label>
                        <br>
                        <input type="text" name="fName" class="form-control" required value="<?php echo $row['first_name']?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>Other Name : </b></label>
                        <br>
                        <input type="text" name="oName" class="form-control" required value="<?php echo $row['other_name']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Gender : </b></label>
                        <br>
                        <input type="text" name="gender" class="form-control" required value="<?php echo $row['gender']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Date of Birth :</b></label>
                        <br>
                        <input type="date" name="dob" class="form-control" required value="<?php echo $row['dob']?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>Postal Address :</b></label>
                        <br>
                        <input type="text" name="postalAdd" class="form-control" required value="<?php echo $row['postal_address']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Telephone Number :</b></label>
                        <br>
                        <input type="text" name="tel_number" class="form-control" required value="<?php echo $row['telephone_number']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Email Address: </b></label>
                        <br>
                        <input type="email" name="emailAdd" class="form-control" required value="<?php echo $row['email']?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>Next Of Kin : </b></label>
                        <br>
                        <input type="text" name="nok" class="form-control" required value="<?php echo $row['nok']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Nok Telephone : </b></label>
                        <br>
                        <input type="text" name="nok_Tel" class="form-control" required value="<?php echo $row['nok_tel']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Course:</b></label>
                        <br>
                        <input type="text" name="course" class="form-control" required value="<?php echo $row['course']?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>KCSE Mean :</b></label>
                        <br>
                        <input type="text" name="kcse_mean" class="form-control" required value="<?php echo $row['kcse_mean']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Education Level :</b></label>
                        <br>
                        <input type="text" name="educationLevel" class="form-control" required value="<?php echo $row['education_level']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>High School Attended : </b></label>
                        <br>
                        <input type="text" name="Hschl_Attended" class="form-control" required value="<?php echo $row['school_attended']?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Year From :</label>
                        <br>
                        <input type="date" name="yearF" class="form-control" required value="<?php echo $row['year_from']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Year To : </b></label>
                        <br>
                        <input type="date" name="yearT" class="form-control" required value="<?php echo $row['year_to']?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>University Attended : </b></label>
                        <br>
                        <input type="text" name="uni_Attended" class="form-control" required value="<?php echo $row['university_attended']?>">
                    </div>
                    <div class="col-sm-6">
                        <div class="buttons">
                            <button class="btn btn-secondary" type="submit">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </body>
        </html>

        <?php
    }
}
mysqli_close($conn);
?>

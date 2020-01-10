<?php
$conn=mysqli_connect("localhost","root","","emobilis");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
$idPassNumber=mysqli_real_escape_string($conn,$_POST['idPass']);
$sql="SELECT * FROM staff_details WHERE idPass_number='$idPassNumber'";
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
            <title>Delete Staff Details</title>
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
            <h3 class="text-center">Delete Staff Details</h3>
        </div>
        <hr>
        <form action="deleteStaff.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <label for=""><b>Staff ID : </b></label>
                        <br>
                        <input type="number" name="staffID" class="form-control" required value="<?php echo $row['staff_id'];?>">
                    </div>
                    <div class="col-sm-3">
                        <label for=""><b>ID/Passport Number : </b></label>
                        <br>
                        <input type="text" name="idPassNo" class="form-control" required value="<?php echo $row['idPass_number'];?>">
                    </div>
                    <div class="col-sm-3">
                        <label for=""><b>First Name : </b></label>
                        <br>
                        <input type="text" name="fName" class="form-control" required value="<?php echo $row['first_name'];?>">
                    </div>
                    <div class="col-sm-3">
                        <label for=""><b>Middle Name : </b></label>
                        <br>
                        <input type="text" name="mName" class="form-control" required value="<?php echo $row['middle_name'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for=""><b>Last Name : </b></label>
                        <br>
                        <input type="text" name="lName" class="form-control" required value="<?php echo $row['last_name'];?>">
                    </div>
                    <div class="col-sm-3">
                        <label for=""><b>Gender : </b></label>
                        <br>
                        <input type="text" name="gender" class="form-control" required value="<?php echo $row['gender'];?>">
                    </div>
                    <div class="col-sm-3">
                        <label for=""><b>Position : </b></label>
                        <br>
                        <input type="text" name="position" class="form-control" required value="<?php echo $row['position'];?>">
                    </div>
                    <div class="col-sm-3">
                        <label for=""><b>Department : </b></label>
                        <br>
                        <input type="text" name="dept" class="form-control" required value="<?php echo $row['department'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for=""><b>Join Date : </b></label>
                        <br>
                        <input type="date" name="joinDate" class="form-control" required value="<?php echo $row['join_date'];?>">
                    </div>
                    <div class="col-sm-3">
                        <label for=""><b>Basic Salary : </b></label>
                        <br>
                        <input type="number" name="bSal" class="form-control" required value="<?php echo $row['basic_salary'];?>">
                    </div>
                    <div class="col-sm-6">
                        <hr>
                        <div class="buttons">
                            <button class="btn btn-danger" type="submit">Delete</button>
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
<?php
$conn=mysqli_connect("localhost","root","","emobilis");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
$staffID=mysqli_real_escape_string($conn,$_POST['staffID']);
$sql="SELECT * FROM staff_details WHERE staff_id='$staffID'";
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
            <title>New User</title>
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
            <h3 class="text-center">New User</h3>
        </div>
        <hr>
        <form action="newUser.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>User ID : </b></label>
                        <br>
                        <input type="number" name="uID" class="form-control" required value="<?php echo $row['staff_id'];?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>First Name : </b></label>
                        <br>
                        <input type="text" name="fName" class="form-control" required value="<?php echo $row['first_name'];?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Middle Name : </b></label>
                        <br>
                        <input type="text" name="mName" class="form-control" required value="<?php echo $row['middle_name'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>Last Name : </b></label>
                        <br>
                        <input type="text" name="lName" class="form-control" required value="<?php echo $row['last_name'];?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Department : </b></label>
                        <br>
                        <input type="text" name="dept" class="form-control" required value="<?php echo $row['department'];?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>Username:</b></label>
                        <br>
                        <input type="text" name="uName" class="form-control" required value="<?php echo $row['username'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""><b>Password : </b></label>
                        <br>
                        <input type="password" name="passwd" class="form-control" required value="<?php echo $row['password'];?>">
                    </div>
                    <div class="col-sm-4">
                        <label for=""><b>User Group : </b></label>
                        <br>
                        <select name="uGroup" id="" class="form-control" required >
                            <option value="">=======Select User Group=======</option>
                            <option value="Systems Administrator">Systems Administrator</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Front Office">Front Office</option>
                            <option value="Accounts">Accounts</option>
                            <option value="Management">Management</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <hr>
                        <div class="buttons">
                            <button class="btn btn-success" type="submit">Add New</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="locUserU.php" class="btn btn-warning">Update</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="locUserD.php" class="btn btn-danger">Delete</a>
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
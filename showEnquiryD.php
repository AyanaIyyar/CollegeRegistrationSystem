<?php
$conn=mysqli_connect("localhost","root","","emobilis");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
$enquiryID=mysqli_real_escape_string($conn,$_POST['enquiry_id']);
$sql="SELECT * FROM enquiries WHERE enquiry_id='$enquiryID'";
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
            <title>Enquiry Delete</title>
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
            <h3 class="text-center">Enquiry Delete</h3>
        </div>
        <hr>
        <form action="#" method="post">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <label for=""><b>Enquiry ID:</b></label>
            <br>
            <input type="text"name="enquiry_id" class="form-control" required value="<?php echo $row['enquiry_id'];?>">
        </div>
        <div class="col-sm-4">
            <label for=""><b>Enquiry Date :</b></label>
            <br>
            <input type="date" name="enquiryDate" class="form-control" required value="<?php echo $row['enquiry_date'];?>">
        </div>
        <div class="col-sm-4">
            <label for=""><b>First Name:</b></label>
            <br>
            <input type="text" name="fName" class="form-control" required value="<?php echo $row['first_name'];?>">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <label for=""><b>Other Name :</b></label>
            <br>
            <input type="text" name="oName" class="form-control" required value="<?php echo $row['other_name'];?>">
        </div>
        <div class="col-sm-4">
            <label for=""><b>Telephone Number :</b></label>
            <br>
            <input type="text" name="tel_number" class="form-control" required value="<?php echo $row['telephone_number'];?>">
        </div>
        <div class="col-sm-4">
            <label for=""><b>Email Address :</b></label>
            <br>
            <input type="email" name="emailAdd" class="form-control" required value="<?php echo $row['email'];?>">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <label for=""><b>Course :</b></label>
            <br>
            <input type="text" name="course" class="form-control" required value="<?php echo $row['course'];?>">
        </div>
        <div class="col-sm-4">
            <label for=""><b>Know about Us:</b></label>
            <br>
            <input type="text" name="knw_abt_us" class="form-control" required value="<?php echo $row['knw_abt_us'];?>" >
        </div>
        <div class="col-sm-4">
            <label for=""><b>Comments :</b></label>
            <br>
            <input type="text" name="comments" class="form-control" required value="<?php echo $row['comments'];?>" >
        </div>
    </div>
    <div class="col-sm-6">
        <hr>
        <div class="buttons">
            <button class="btn btn-warning" type="submit">Update</button>
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

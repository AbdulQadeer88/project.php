<?php
include("config.php");
include("nav.php");
include("auth.php");

$id=$_GET['id'];
$qry="SELECT * FROM appoint WHERE id='$id'";
$result= mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Register Form</h1>
                <form method="post" action="appointmentupdate.php">
                    <div>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                    </div>
                    <div>
                        <label class="form-label">DOB</label>
                        <input type="text" class="form-control" name="dob" value="<?php echo $row['dob'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Drname</label>
                        <input type="text" class="form-control" name="drname" value="<?php echo $row['drname'] ?>">
                    </div>
                        <label class="form-label">Stage</label>
                        <input type="text" class="form-control" name="stage" value="<?php echo $row['stage'] ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary" name="re">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
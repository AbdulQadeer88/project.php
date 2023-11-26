<?php
include("config.php");
include("nav.php");
include("auth.php");

$id=$_GET['id'];
$qry="SELECT * FROM doctors WHERE id='$id'";
$result= mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="border: solid">
                <h1>Register Form</h1>
                <form method="post" action="doctorupdate.php">
                    <div>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                    </div>
                    <div>
                        <label class="form-label"> Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Qualification</label>
                        <input type="text" class="form-control" name="qualification" value="<?php echo $row['qualification'] ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary" name="re">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
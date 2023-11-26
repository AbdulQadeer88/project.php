<?php
include("config.php");
include("nav.php");
include("auth.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Doctor Form</h1>
                <form method="post">
                    <div>
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div>
                        <label class="form-label">Qualification</label>
                        <input type="text" class="form-control" name="qualification">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary" name="re">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['re'])){  
    $name=$_POST['name'];
    $qualification=$_POST['qualification'];
    
    $qry="INSERT INTO doctors(name,qualification) VALUE ('$name','$qualification')";
    $result=mysqli_query($con,$qry);
    
    if($result){
        header("location:doctorview.php");
    }
    else {
        echo "error";
    }
    
}
mysqli_close($con);
?>
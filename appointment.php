<?php 
include("nav.php");
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Doctor Appointment Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2>Doctor Appointment Form</h2>
    <form  method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="date">DOB:</label>
        <input type="date" class="form-control" id="date" name="dob" required>
      </div>
      <div class="form-group">
        <label for="phone">Address:</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="name">Drname:</label>
        <input type="text" class="form-control" id="drname" name="drname" required>
      </div>
      <div class="form-group">
        <label for="name">Stage:</label>
        <input type="text" class="form-control" id="name" name="stage" required>
      </div>
      <button type="submit" class="btn btn-primary" name="re">Submit</button>
    </form>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



<?php
include('config.php');
if (isset($_POST['re'])){  
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $drname=$_POST['drname'];
    $stage=$_POST['stage'];
    
    $qry="INSERT INTO appoint(name,email,dob,address,phone,drname,stage) VALUE ('$name','$email','$dob','$address','$phone','$drname','$stage')";
    $result=mysqli_query($con,$qry);
    
    if($result){
        header("location:appointmentview.php");
    }
    else {
        echo "error";
    }
    
}
mysqli_close($con);
?>
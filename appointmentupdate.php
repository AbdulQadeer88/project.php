<?php
include("config.php");

    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $drname=$_POST['drname'];
    $stage=$_POST['stage'];
    
    $qry="UPDATE appoint SET name='$name',email='$email',dob='$dob',address='$address',phone='$phone',drname='$drname',stage='$stage' WHERE id='$id'";
    $result=mysqli_query($con,$qry);
    
    if($result){

        header("Location:appointmentview.php");
    }
    else {
        echo "error";
    }
    

mysqli_close($con);
?>
<?php
include("config.php");

    $id=$_POST['id'];
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $qry="UPDATE reg SET username='$name',email='$email',password='$password' WHERE id='$id'";
    $result=mysqli_query($con,$qry);
    
    if($result){

        header("Location:view.php");
    }
    else {
        echo "error";
    }
    

mysqli_close($con);
?>
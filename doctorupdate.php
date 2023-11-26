<?php
include("config.php");

    $id=$_POST['id'];
    $name=$_POST['name'];
    $qualification=$_POST['qualification'];
    
    $qry="UPDATE doctors SET name='$name',qualification='$qualification' WHERE id='$id'";
    $result=mysqli_query($con,$qry);
    
    if($result){

        header("Location:doctorview.php");
    }
    else {
        echo "error";
    }
    

mysqli_close($con);
?>
<?php
include("config.php");
$id=$_GET['id'];

$qry="DELETE FROM appoint where id ='$id'";
$result=mysqli_query($con,$qry);
if($result){
    header("location: appointmentview.php");
}
else{
    echo "error";
}    
mysqli_close($con);
?>
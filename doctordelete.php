<?php
include("config.php");
$id=$_GET['id'];

$qry="DELETE FROM doctors where id ='$id'";
$result=mysqli_query($con,$qry);
if($result){
    header("location: doctorview.php");
}
else{
    echo "error";
}    
mysqli_close($con);
?>
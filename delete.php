<?php
include("config.php");
$id=$_GET['id'];

$qry="DELETE FROM reg where id ='$id'";
$result=mysqli_query($con,$qry);
if($result){
    header("location: view.php");
}
else{
    echo "error";
}    
mysqli_close($con);
?>
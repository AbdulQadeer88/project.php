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
        <h1> Doctors </h1>
        <table class="table table-hover">
            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Qualification</td>
                <td>Action</td>
            </tr>
            <?php
            $qry="SELECT * FROM doctors";
            $result= mysqli_query($con,$qry);
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['qualification']."</td>";
                    echo "<td> <a href='doctordelete.php?id=".$row['id']."'class='btn btn-danger'> Delete </a>";
                    echo "<a href='doctoredit.php?id=".$row['id']."'class='btn btn-success'> Update </a></td>";

                    echo "</tr>";
                }
            }
            else{
                echo " record not found";
            }
            mysqli_close($con);
            ?>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            border: 1px solid #ced4da; /* Add border to the form container */
            border-radius: 10px; /* Optional: Add rounded corners */
            padding: 20px; /* Add padding for better visual appearance */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1 class="text-ce">LOGIN FORM</h1>

    <div class="container login-container">
        <form method="post">
            <div>
                 <label class="form label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div>
                <label class="form label">password</label>
                 <input type="password" class="form-control" name="password">
             </div>
            <div>
                 <button type="submit" class="btn btn-success" name="sub">login</button>
                 <a href="register.php" class="btn btn-primary">Sign Up</a>
            </div>
        </form>
    </div>

</body>
</html>


<?php
include ("config.php");

if(isset($_POST["sub"])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $qry="SELECT * FROM reg WHERE email='$email' and password='$password'";
    $result=mysqli_query($con,$qry);
    if(mysqli_num_rows($result)> 0){
        session_start();
        $_SESSION["login"]=true;
        $_SESSION["email"]=$email;
        header("location:index.php");
    }else{
        echo "invalid email and password";
    }
}
?>
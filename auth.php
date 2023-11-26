<?php
if(!isset ($_SESSION)) {
    SESSION_START();
}
if(!isset($_SESSION['login'])) {

    header("location:login.php");
    exit();
}
?>
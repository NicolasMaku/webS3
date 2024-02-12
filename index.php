<?php

session_start();

if(isset($_SESSION['idUser'])) {
    header("location:pages/login.php");
    exit();
}
header("location:pages/login.php");
exit();
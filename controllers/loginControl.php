<?php
include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch ($action){

    case "login":
            $id_user = testLogin($_POST['email'], $_POST['password']);

            if($id_user !== false){
                session_start();
                $_SESSION['idUser'] = $id_user;
                header("location:../template/index.php?page=../pages/cards.php");
                exit();
            }

            else {
                header("location:../pages/login.php?error=Invalid email or password");
                exit();
            }


    case "inscription":
            break;

    case "verify-email":

    default:
}

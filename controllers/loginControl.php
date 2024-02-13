<?php
include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch ($action){

    case "login":
            $id_user = testLogin($_POST['email'], $_POST['password']);

            if($id_user !== false){
                session_start();
                $_SESSION['idUser'] = $id_user[0];
                $_SESSION['is_admin'] = $id_user[1] == 1;

                if($_SESSION["is_admin"] == 0) {
                    header("location:../template/frontModel.php?page=../pages/cards.php");

                } else {
                    header("location:../template/backModel.php?page=../pages/cards.php");
                }
                exit();
            }

            else {
                header("location:../pages/login.php?error=Invalid email or password");
                exit();
            }

    case "logout":
            session_start();
            session_destroy();
            header("location:../pages/login.php");
            exit();

    case "inscription":
            break;

    case "verify-email":

    default:
}

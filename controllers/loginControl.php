<?php
include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch ($action){

    case "login":
            $id_user = testLogin($_POST['email'], $_POST['password']);

            if($id_user !== false){
                session_start();
                $_SESSION['idUser'] = $id_user;
                header("location:../template/");
                exit();
            }

            else {
                header("location:  ");
                exit();
            }


    case "inscription":
            break;

    case "verify-email":

    default:
        $id_user = testLogin("utilisateur1@email.co", "motdepasse1");
        echo $id_user;
//        echo "hello";

}
//$id_user = testLogin("admin1@email.com", "adminpassword");
//echo $id_user;
//echo "a";

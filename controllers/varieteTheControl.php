<?php
include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch($action){
    case "save" :
        $return = the_insertion($_POST['nom'], $_POST['occupation'], $_POST['rendement']);

        if($return === true){
            echo "Variete de thé inseré avec succès";

        } else {
            echo $return;

        }

        break;


    case "delete":
        $return = the_delete($_POST['id']);

        if($return === true){
            $msg = "Variete de thé supprimé";

        } else {
            $msg = $return;
        }

        header("location:../template/backModel.php?page=../pages/tableauVarieteThe.php&msg=".$msg);
        break;

}
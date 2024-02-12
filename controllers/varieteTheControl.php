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

    case "update" :
        $return = the_modify($_POST['idVariete'], $_POST['nom'], $_POST['occupation'], $_POST['rendement']);

        if($return === true){
            header("location:../template/backModel.php?page=../pages/tableauVarieterThe.php");
            exit();
        }
        else {
            header("location:../template/backModel.php?page=../pages/insertVarieteThe.php&action=update&idVariete=".$_POST['idVariete']);
            exit();
        }


    case "delete":
        $return = the_delete($_GET['idVariete']);

        if($return === true){
            $msg = "Variete de thé supprimé";

        } else {
            $msg = $return;
        }

        header("location:../template/backModel.php?page=../pages/tableauVarieterThe.php&msg=".$msg);
        break;

}
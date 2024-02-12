<?php

include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch ($action){
    case "save":
            $return = parcelle_insert($_POST['surface'], $_POST['idVariete']);

            if($return === true){
                header("location:../template/backModel.php?page=../pages/tableauParcelle.php");

            } else {
                header("location:../template/backModel.php?page=../pages/insererParcelle.php&error=".$return);
            }
            exit();


    case "update":
            $return = parcelle_modify($_POST['idParcelle'], $_POST['surface'], $_POST['idVariete']);

            if($return === true){
                header("location:../template/backModel.php?page=../pages/tableauParcelle.php");

            } else {
                header("location:../template/backModel.php?page=../pages/insererParcelle.php&action=update&idParcelle=".$_POST['idParcelle']."&error=".$return);
            }
            exit();


    case "delete":
            $return = parcelle_supprimer($_GET['idParcelle']);

            if($return === true){
                header("location:../template/backModel.php?page=../pages/tableauParcelle.php");

            } else {
                header("location:../template/backModel.php?page=../pages/tableauParcelle.php&msg=".$return);
            }
            exit();

}

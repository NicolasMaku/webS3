<?php

include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch ($action){
    case "save":
            $return = ceuilleur_insert($_POST['nom'], $_POST['genre'], $_POST['date']);

            if($return === true){
                header("location:../template/backModel.php?page=../pages/tableauCeuilleur.php");

            } else {
                header("location:../template/backModel.php?page=../pages/insertCeuilleur.php&error=".$return);
            }
            exit();

    case "update":
            $return = ceuilleur_modify($_POST['idCeuilleur'],$_POST['nom'], $_POST['genre'], $_POST['date']);

            if($return === true){
                header("location:../template/backModel.php?page=../pages/tableauCeuilleur.php");

            } else {
                header("location:../template/backModel.php?page=../pages/insertCeuilleur.php&action=update&idCeuilleur=".$_POST['idCeuilleur']."&error=".$return);
            }
            exit();

    case "delete":
            $return = ceuilleur_delete($_GET['idCeuilleur']);

            if($return === true){
                header("location:../template/backModel.php?page=../pages/tableauCeuilleur.php");

            } else {
                header("location:../template/backModel.php?page=../pages/tableauCeuilleur.php&msg=".$return);
            }
            exit();




}
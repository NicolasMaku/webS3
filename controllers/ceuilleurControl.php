<?php

include_once "../inc/function.php";

$action = get_action($_GET, $_POST);
switch ($action){
    case "save":
            $return = ceuilleur_insert($_POST['nom'], $_POST['genre'], $_POST['date'], $_POST['poidsMin'], $_POST['bonus'], $_POST['malus']);

            if($return === true){
                header("location:../template/backModel.php?page=../pages/tableauCeuilleur.php");

            } else {
                header("location:../template/backModel.php?page=../pages/insertCeuilleur.php&error=".$return);
            }
            exit();


    case "update":
            $return = ceuilleur_modify($_POST['idCeuilleur'],$_POST['nom'], $_POST['genre'], $_POST['date'], $_POST['poidsMin'], $_POST['bonus'], $_POST['malus']);

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


    case "salaire":
            echo salaire_getByid($_POST['idCeuilleur'])['montant'];
            exit();


    case "payement":
//        echo "a";
            echo getPayement_par_Ceuilleur($_POST['debut'], $_POST['fin']);
//            var_dump(getPayement_par_Ceuilleur($_POST['debut'], $_POST['fin']));


}

//var_dump(salaire_getByid(1));


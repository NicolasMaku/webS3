<?php

    include_once "../inc/function.php";

    $action = get_action($_GET,$_POST);
    echo $action;

    switch ($action) {
        case "save":
            $return = categorie_depense_insert($_POST['nom']);

            if ($return === true) header("Location:../template/backModel.php?page=../pages/insertCategorieDepense.php");
            else header("Location:../template/backModel.php?page=../pages/insertCategorieDepense.php&error=Votre insertion est errone");
            exit();
        case "update":
            $return = categorie_depense_update($_POST['id'],$_POST['nom']);
            header("Location:../template/backModel.php?page=../pages/tableauCategorieDepense.php");
            exit();
            break;
        case "delete":
            categorie_depense_delete($_GET['id']);
            header("Location:../template/backModel.php?page=../pages/tableauCategorieDepense.php");
            exit();
            break;
    }
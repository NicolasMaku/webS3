<?php

include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch ($action){
    case "salaire":
        $result = salaire_modify($_POST['idCeuilleur'],$_POST['idCeuilleur'], $_POST['montant']);

        if($result === true) {
            header("location:../template/backModel.jsp?page=../pages/tablaeuCeuilleur.php");
        }
        else{
            header("location:../template/backModel.jsp?page=../pages/tablaeuCeuilleur.php&msg=".$result);
        }
        exit();

}

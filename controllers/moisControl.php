<?php

include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch ($action){
        case "update";
            mois_reset();
            foreach($_POST['idMois[]'] as $mois) {
                $return = update_mois_production($mois['id']);
            }
            header("location:../template/backModel.php?page=../pages/moisDeProduction.php");
            exit();

}

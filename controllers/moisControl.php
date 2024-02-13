<?php

include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch ($action){
        case "update";
            mois_reset();
            $return = array();
//            var_dump($_POST['idMois']);
            foreach($_POST['idMois'] as $mois) {
                echo $mois;
                $return[] = mois_update_regenerated($mois);
            }
//            var_dump($return);
            header("location:../template/backModel.php?page=../pages/moisDeProduction.php");
            exit();

}

//mois_update_regenerated(1);
<?php

include_once "../inc/function.php";

$action = get_action($_GET, $_POST);
//echo $_POST['idCeuil'];

switch ($action) {
    case "save":
        $return = inserer_ceuillette($_POST['date'], $_POST['idCeuil'], $_POST['idParc'], $_POST['poids']);

        echo $return;
        break;
}
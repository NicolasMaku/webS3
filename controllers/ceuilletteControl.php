<?php

include_once "../inc/function.php";

$action = get_action($_GET, $_POST);
//echo $_POST['idCeuil'];

switch ($action) {
    case "save":
        inserer_ceuillette($_POST['date'], $_POST['idCeuil'], $_POST['idParc'], $_POST['poids']);

        echo json_encode(ceuillette_getAll());
        break;

    case "verify":
        $poids = $_POST['poids'];
        if(empty($_POST['poids'])){
            $poids = 0;
        }

        $is_valid = valide($poids, $_POST['date'], $_POST['parcelle']);

        if(!$is_valid) echo "Poids invalide";
}

//var_dump($_POST);

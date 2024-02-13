<?php
include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch ($action) {
    case "save":
//        depense_insert($_POST['date'], $_POST['idCateg'], $_POST['montant']);
//        var_dump(depense_info_getAll());
        echo json_encode(depense_info_getAll());
        break;
}

//print depense_info_getAll()[0]['nom'];
//var_dump(depense_info_getAll());
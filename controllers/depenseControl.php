<?php
include_once "../inc/function.php";

$action = get_action($_GET, $_POST);

switch ($action) {
    case "save":
        depense_insert($_POST['date'], $_POST['idCateg'], $_POST['montant']);
        echo json_encode(depense_info_getAll());
        break;
}

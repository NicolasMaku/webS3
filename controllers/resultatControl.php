<?php
    include_once "../inc/function.php";


    if (isset($_POST["type"])) {
        $date1 = $_POST['dateMin'];
        $date2 = $_POST['dateMax'];
        $rep = [
            "poidsTotal" => getPoidsTotalCeuillette_intervalle($date1,$date2),
            "poidsRestantParcelle" => getPoidsRestantParcelle_intervalle($date1,$date2),
            "prixDeRevientKg" => getCoutRevientKg_intervalle($date1,$date2)
        ];

        echo json_encode($rep);
    } else {
        $date = $_POST['date'];
        $rep = [
            "poidsTotal" => getPoidsTotalCeuillette_fin($date),
            "poidsRestantParcelle" => getPoidsRestantParcelle_fin($date),
            "prixDeRevientKg" => getCoutRevientKg_fin($date)
        ];

        echo json_encode($rep);
    }


?>
<?php
include_once "base.php";
include_once "Crud.php";

function inserer_ceuillette($date,$id_ceuilleur,$id_parcelle,$poids_ceuilli) {
    $ceuilleutte = [
        "date" => $date,
        "id_ceuilleur" =>$id_ceuilleur,
        "id_parcelle" => $id_parcelle,
        "poids_ceuilli" => $poids_ceuilli
    ];

    try {
        if (valide($poids_ceuilli,$date,$id_parcelle)) {
            $crud = new Crud('the_ceuillette', connect());
            $crud->insert($ceuilleutte);
        }

        return "Cueillette bien inseré";


    }catch (Exception $exception){
        return $exception->getMessage();
    }
}


function valide($poids_ceuilli,$date,$id_parcelle) {
    $initiale = getPoidsInitiale_mois($date,$id_parcelle);
    if ($poids_ceuilli>getPoidsInitiale()) return false;
    else return true;
}

function ceuillette_getAll() {
    $crud = new Crud('the_ceuillette_fullInfo',connect());
    return $crud->lister();
}

//    inserer_ceuillette('2023-12-12',1,1,10);
?>
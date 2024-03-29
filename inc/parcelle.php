<?php
include_once "Crud.php";
include_once "base.php";
function parcelle_getAll() {
    $crud = new Crud('the_parcelle',connect());
    return $crud->lister();
}

function parcelle_supprimer($id) {
    $requete = connect()->prepare("DELETE FROM the_parcelle WHERE numero = :id");
    $requete->bindValue(':id', $id);
    $requete->execute();
}

function parcelle_insert($surface,$id_variete_the) {

    $parcelle = [
        "surface" => $surface,
        "id_variete_the" => $id_variete_the,
    ];

    try {
        $crud = new Crud('the_parcelle',connect());
        $crud->insert($parcelle);

        return true;

    }catch (Exception $exception){
        return $exception->getMessage();
    }
}

function parcelle_modify($numero,$surface,$id_variete_the) {

    $parcelle = [
        "surface" => $surface,
        "id_variete_the" => $id_variete_the,
    ];

    try {
        $crud = new Crud('the_parcelle',connect());
        $modification = '';
        foreach ($parcelle as $cle => $valeur) {
            $modification .= "{$cle} = :{$cle}, ";
        }
        $modification = rtrim($modification, ', ');

        $requete = connect()->prepare("UPDATE the_parcelle SET {$modification} WHERE numero = :numero");

        $requete->bindValue(':numero', $numero);

        foreach ($parcelle as $cle => $valeur) {
            $requete->bindValue(':' . $cle, $valeur);
        }

        $requete->execute();
        return true;

    }catch (Exception $exception){
        return $exception->getMessage();
    }
}

function parcelle_getByid($numero) {
    $requete = connect()->prepare("SELECT * FROM the_parcelle WHERE numero = :numero");
    $requete->bindValue(':numero', $numero);
    $requete->execute();

    return $requete->fetch(PDO::FETCH_ASSOC);
}

function parcelle_variete_getAll() {
    $crud = new Crud('the_parcelle_variete',connect());
    return $crud->lister();
}

function parcelle_getAll_rest() {

}


//    var_dump(parcelle_getByid(1));
//    parcelle_insert(25,1);
?>
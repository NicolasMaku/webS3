<?php
    include_once "Crud.php";
    include_once "base.php";
    function parcelle_getAll() {
        $crud = new Crud('the_parcelle',connect());
        return $crud->lister();
    }

    function parcelle_supprimer($id) {
        $crud = new Crud('the_parcelle',connect());

        try {
            $crud->delete($id);
            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

function parcelle_insert($surface,$id_variete_the) {

    $parcelle = [
        "surface" => $surface,
        "id_variete_the" => $id_variete_the
    ];

    try {
        $crud = new Crud('the_parcelle',connect());
        $crud->insert($parcelle);

        return true;

    }catch (Exception $exception){
        return $exception->getMessage();
    }
}

    function parcelle_modify($id,$surface,$id_variete_the) {

        $parcelle = [
            "surface" => $surface,
            "id_variete_the" => $id_variete_the
        ];

        try {
            $crud = new Crud('the_parcelle',connect());
            $crud->update($id,$parcelle);

            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

//    parcelle_insert(25,1);
?>
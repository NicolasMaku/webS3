<?php
    include_once "Crud.php";
    include_once "base.php";
    function ceuilleur_getAll() {
        $crud = new Crud('the_ceuilleur',connect());
        return $crud->lister();
    }

    function ceuilleur_insert($nom,$genre,$dateNaissance) {
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

    function ceuilleur_modify() {

    }

    function ceuilleur_delete() {

    }


//    var_dump(getAll());
?>
<?php
    include_once "base.php";
    include_once "Crud.php";
    function salaire_insertion($id_ceuilleur,$montant) {
        $salaire = [
            "id_ceuilleur" => $id_ceuilleur,
            "montant" => $montant
        ];

        try {
            $crud = new Crud('the_salaire',connect());
            $crud->insert($salaire);

            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function salaire_modify($id,$id_ceuilleur,$montant) {
        $salaire = [
            "id_ceuilleur" => $id_ceuilleur,
            "montant" => $montant
        ];

        try {
            $crud = new Crud('the_salaire',connect());
            $crud->update($id,$salaire);

            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function salaire_getAll() {
        $crud = new Crud('the_salaire',connect());
        return $crud->lister();
    }

    function salaire_getByid($id) {
        $crud = new Crud('the_salaire',connect());
        try {
            return $crud->getById($id);

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

?>
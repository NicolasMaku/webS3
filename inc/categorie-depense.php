<?php
    include_once "base.php";
    include_once "Crud.php";

    function categorie_depense_getAll() {
        $crud = new Crud("the_categorie_depense",connect());
        return $crud->lister();
    }

    function categorie_depense_getByid($id) {
        $crud = new Crud('the_categorie_depense',connect());
        try {
            return $crud->getById($id);

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function categorie_depense_insert($nom) {
        $categorie_depense = [
            "nom" => $nom
        ];

        $crud = new Crud('the_categorie_depense',connect());
        try {
            $crud->insert($categorie_depense);

            return true;
        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function categorie_depense_update($id,$nom) {
        $categorie_depense = [
            "nom" => $nom
        ];

        $crud = new Crud('the_categorie_depense',connect());
        try {
            $crud->update($id,$categorie_depense);

            return true;
        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function categorie_depense_delete($id) {
        $crud = new Crud('the_categorie_depense',connect());
        try {
            $crud->delete($id);
            return true;
        }catch (Exception $exception){
            return "Foreign key error";
//            return $exception->getMessage();
        }
    }
?>
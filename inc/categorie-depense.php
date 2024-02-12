<?php
    include_once "base.php";
    include_once "Crud.php";

    function categorie_depense_getAll() {
        $crud = new Crud("the_categorie_depense",connect());
        return $crud->lister();
    }

    function the_getByid($id) {
        $crud = new Crud('the_categorie_depense',connect());
        try {
            return $crud->getById($id);

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }
?>
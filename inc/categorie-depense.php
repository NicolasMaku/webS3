<?php
    include_once "base.php";
    include_once "Crud.php";

    function categorie_depense_getAll() {
        $crud = new Crud("the_categorie_depense", connect());
        return $crud->lister();
    }
?>
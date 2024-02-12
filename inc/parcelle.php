<?php
    include_once "Crud.php";
    include_once "base.php";
    function parcelle_getAll() {
        $crud = new Crud('the_parcelle',connect());
        return $crud->lister();
    }
?>
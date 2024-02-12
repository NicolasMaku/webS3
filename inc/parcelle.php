<?php
    include_once "Crud.php";
    include_once "base.php";
    function getAll() {
        $crud = new Crud('the_parcelle',connect());
        return $crud->lister();
    }
?>
<?php
    include_once "Crud.php";
    include_once "base.php";
    function getAll() {
        $crud = new Crud('the_ceuilleur',connect());
        return $crud->lister();
    }

    var_dump(getAll());
?>
<?php
    include_once "base.php";
    include_once "Crud.php";
    function depense_insert($date,$id_categorie,$montant) {
        $depense = [
            "date" => $date,
            "id_categorie" =>$id_categorie,
            "montant" =>$montant
        ];

        $crud = new Crud('the_depense',connect());
        $crud->insert($depense);
    };

    function depense_getAll() {
        $crud = new Crud('the_depense',connect());
        return $crud->lister();
    }

//    inserer_depense("2023-03-12",1,500.0);

?>
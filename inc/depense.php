<?php
    include_once "base.php";
    include_once "Crud.php";
    function depense_insert($date,$id_categorie,$montant) {
        $depense = [
            "date" => $date,
            "id_categorie" =>$id_categorie,
            "montant" =>$montant
        ];

        try {
            $crud = new Crud('the_depense',connect());
            $crud->insert($depense);

            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }

    };

    function depense_getAll() {
        $crud = new Crud('the_depense',connect());
        return $crud->lister();
    }

    function depense_delete($id) {
        $crud = new Crud('the_depense',connect());

        try {
            $crud->delete($id);
            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function depense_update($id,$date,$id_categorie,$montant) {
        $depense = [
            "date" => $date,
            "id_categorie" =>$id_categorie,
            "montant" =>$montant
        ];

        try {
            $crud = new Crud('the_depense',connect());
            $crud->update($id,$depense);

            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

//    depense_delete(4);
//    depense_insert("2022-03-12",2,500.0);

?>
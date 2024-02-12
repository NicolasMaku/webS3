<?php
    include_once "Crud.php";
    include_once "base.php";
    function the_insertion($nomVariete,$occupation,$rendementParPied) {
        $the = [
            "nom" => $nomVariete,
            "occupation" => $occupation,
            "rendement_par_pied" => $rendementParPied
        ];

        try {
            $crud = new Crud('the_variete',connect());
            $crud->insert($the);

            return "variete bien inseré";


        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function the_modify($id,$nomVariete,$occupation,$rendementParPied) {
        $the = [
            "nom" => $nomVariete,
            "occupation" => $occupation,
            "rendement_par_pied" => $rendementParPied
        ];

        try {
            $crud = new Crud('the_variete',connect());
            $crud->update($id,$the);

            return "variete bien modifié";


        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function the_getAll() {
        $crud = new Crud('the_variete',connect());
        return $crud->lister();
    }

    function the_delete($id) {
        $crud = new Crud('the_variete',connect());

        try {
            $crud->delete($id);
            return "variete bien supprimé";

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

//    echo the_modify(2,"Noire rouge",3.0,3);

?>
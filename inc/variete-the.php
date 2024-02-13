<?php
    include_once "Crud.php";
    include_once "base.php";
    function the_insertion($nomVariete,$occupation,$rendementParPied,$prixVente) {
        $the = [
            "nom" => $nomVariete,
            "occupation" => $occupation,
            "rendement_par_pied" => $rendementParPied,
            "prix_vente" => $prixVente
        ];

        try {
            $crud = new Crud('the_variete',connect());
            $crud->insert($the);

            return "variete bien inseré";


        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function the_modify($id,$nomVariete,$occupation,$rendementParPied,$prixVente) {
        $the = [
            "nom" => $nomVariete,
            "occupation" => $occupation,
            "rendement_par_pied" => $rendementParPied,
            "prix_vente" => $prixVente
        ];

        try {
            $crud = new Crud('the_variete',connect());
            $crud->update($id,$the);

            return true;


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
            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function the_getByid($id) {
        $crud = new Crud('the_variete',connect());
        try {
            return $crud->getById($id);

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

//    echo the_modify(2,"Noire rouge",3.0,3);

?>
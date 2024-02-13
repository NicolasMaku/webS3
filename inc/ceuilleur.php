<?php
    include_once "Crud.php";
    include_once "base.php";
    function ceuilleur_getAll() {
        $crud = new Crud('the_ceuilleur',connect());
        return $crud->lister();
    }

    function ceuilleur_insert($nom,$genre,$dateNaissance,$poidsMinimum,$bonus,$malus) {
        $ceuilleur = [
            "nom" => $nom,
            "genre" => $genre,
            "date_naissance" => $dateNaissance,
            "poids_minimum" => $poidsMinimum,
            "bonus" => $bonus,
            "malus" => $malus
        ];

        try {
            $crud = new Crud('the_ceuilleur',connect());
            $crud->insert($ceuilleur);

            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function ceuilleur_modify($id,$nom,$genre,$dateNaissance,$poidsMinimum,$bonus,$malus) {
        $ceuilleur = [
            "nom" => $nom,
            "genre" => $genre,
            "date_naissance" => $dateNaissance,
            "poids_minimum" => $poidsMinimum,
            "bonus" => $bonus,
            "malus" => $malus
        ];

        try {
            $crud = new Crud('the_ceuilleur',connect());
            $crud->update($id,$ceuilleur);

            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function ceuilleur_delete($id) {
        try {
            $crud = new Crud('the_ceuilleur', connect());
            $crud->delete($id);
            return true;
        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function ceuilleur_getByid($id) {
        $crud = new Crud('the_ceuilleur',connect());
        try {
            return $crud->getById($id);

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function ceuilleur_getPayement() {
        $sql = "select * from poids_minimal from the_ceuilleur";
//        $poids_minimal =
    }

//    ceuilleur_insert("Kevin","Homme","2018-12-4");
//    var_dump(getAll());
?>
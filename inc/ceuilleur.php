<?php
    include_once "Crud.php";
    include_once "base.php";
    function ceuilleur_getAll() {
        $crud = new Crud('the_ceuilleur',connect());
        return $crud->lister();
    }

    function ceuilleur_insert($nom,$genre,$dateNaissance) {
        $ceuilleur = [
            "nom" => $nom,
            "genre" => $genre,
            "date_naissance" => $dateNaissance
        ];

        try {
            $crud = new Crud('the_ceuilleur',connect());
            $crud->insert($ceuilleur);

            return true;

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    function ceuilleur_modify($id,$nom,$genre,$dateNaissance) {
        $ceuilleur = [
            "nom" => $nom,
            "genre" => $genre,
            "date_naissance" => $dateNaissance
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
        $crud = new Crud('the_ceuilleur',connect());
        $crud->delete($id);
    }

    function ceuilleur_getByid($id) {
        $crud = new Crud('the_ceuilleur',connect());
        try {
            return $crud->getById($id);

        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }

//    ceuilleur_insert("Kevin","Homme","2018-12-4");
//    var_dump(getAll());
?>
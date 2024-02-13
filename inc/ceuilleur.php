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

    function ceuilleur_salaire_journalier($idCeuilleur) {
        $sql = "select  montant from the_salaire where id_ceuilleur=".$idCeuilleur;
        return connect()->query($sql)->fetch(PDO::FETCH_ASSOC)['montant'];
    }

    function get_poids_jour($date) {
        $sql = "select sum(poids_ceuilli) as somme from the_ceuillette where date='".$date."'";
        return connect()->query($sql)->fetch(PDO::FETCH_ASSOC)['somme'];
    }

    function ceuilleur_getPayement($date,$id_ceuilleur) {
        $sql = "select  poids_minimal from the_ceuilleur";
        $poids_minimal = connect()->query($sql)->fetch(PDO::FETCH_ASSOC)['poids_minimal'];

        if ($poids_minimal>get_poids_jour($date)) {
            return ceuilleur_salaire_journalier($id_ceuilleur) + ($poids_minimal - get_poids_jour($date))*connect()->query("select bonus from the_ceuilleur where id=".$id_ceuilleur)->fetch(PDO::FETCH_ASSOC)['bonus'];
        } else if ($poids_minimal==get_poids_jour($date)) {
            return ceuilleur_salaire_journalier($id_ceuilleur);
        } else {
            return ceuilleur_salaire_journalier($id_ceuilleur) - (get_poids_jour($date) - $poids_minimal)*connect()->query("select bonus from the_ceuilleur where id=".$id_ceuilleur)->fetch(PDO::FETCH_ASSOC)['malus'];
        }
    }

//    ceuilleur_insert("Kevin","Homme","2018-12-4");
//    var_dump(getAll());
?>
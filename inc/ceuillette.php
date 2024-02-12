<?php
    include_once "base.php";
    include_once "Crud.php";

    function inserer_ceuillette($date,$id_ceuilleur,$id_parcelle,$poids_ceuilli) {
        $ceuilleutte = [
            "date" => $date,
            "id_ceuilleur" =>$id_ceuilleur,
            "id_parcelle" => $id_parcelle,
            "poids_ceuilli" => $poids_ceuilli
        ];

        try {
            $crud = new Crud('the_ceuillette', connect());
            $crud->insert($ceuilleutte);

            return "Cueillette bien inseré";


        }catch (Exception $exception){
            return $exception->getMessage();
        }
    }


    function valide($poids_ceuilli) {
        return false;
    }

//    inserer_ceuillette('2023-12-12',1,1,10);
?>
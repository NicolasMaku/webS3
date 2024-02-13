<?php
    include_once "../inc/function.php";
    include_once "../inc/Crud.php";
    function update_mois_production($mois) {
        $crud = new Crud('the_mois_regenerer',connect());
        for ($i = 1; $i <= count($mois); $i++) {
            $temp_mois = [
                "regenerer" => $mois[$i]
            ];

            $crud->update($i,$temp_mois);
        }
    }

    function mois_getAll() {
        $crud = new Crud('the_mois_regenerer',connect());
        return $crud->lister();
    }

    function mois_reset() {
        $connection = connect();
        $sql = "update the_mois_regenerer set regenerer=0 WHERE true";
        $connection->query($sql)->execute();
    }

    function mois_update_regenerated($id_mois) {
        $connection = connect();
        $sql = "update the_mois_regenerer set regenerer=1 where id=".$id_mois;
        $connection->query($sql)->execute();
//        foreach ($id_mois as $cle => $value) {
//            $sql = "update the_mois_regenerer set regenerer=1 where id=".$value;
//            $connection->query($sql)->execute();
//        }
    }

//    $mois = [
//        1 => 0,
//        2 => 1,
//        3 => 1,
//        4 => 1,
//        5 => 1,
//        6 => 1,
//        7 => 1,
//        8 => 1,
//        9 => 1,
//        10 => 1,
//        11 => 1,
//        12 => 1
//    ];
//
//    update_mois_production($mois);
//    mois_reset();

//    $mois = [1,2,3,4];
//    mois_update_regenerated($mois);
?>
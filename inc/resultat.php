<?php
    include_once "base.php";
    function getPoidsTotalCeuillette() {
        $sql = "select sum(poids_ceuilli) as somme from the_ceuillette ";
        return connect()->query($sql)->fetch(PDO::FETCH_ASSOC)['somme'];
    }

//    Quel est la quantite initiale dans une parcelle
    function getPoidsRestantParcelle() {
        $sqlSurface = "select sum(surface) as somme from the_parcelle";
        $surface = connect()->query($sqlSurface)->fetch(PDO::FETCH_ASSOC)['somme'];

        $quantiteInitialeParHa = 1000;
        return $quantiteInitialeParHa*$surface - getPoidsTotalCeuillette();
    }

    function getCoutRevientKg() {
        $sql = "select sum(montant) as somme from the_depense";
        $depense = connect()->query($sql)->fetch(PDO::FETCH_ASSOC)['somme'];

        return $depense/getPoidsTotalCeuillette();
    }

    function getPoidsTotalCeuillette_intervalle($date1,$date2) {
        $sql = "select sum(poids_ceuilli) as somme from the_ceuillette where date>'". $date1 ."' and date<'". $date2 ."'";

        return connect()->query($sql)->fetch(PDO::FETCH_ASSOC)['somme'];
    }

    function getPoidsRestantParcelle_intervalle($date1,$date2) {
        $sqlSurface = "select sum(surface) as somme from the_parcelle";

        $surface = connect()->query($sqlSurface)->fetch(PDO::FETCH_ASSOC)['somme'];

        $quantiteInitialeParHa = 1000;
        return $quantiteInitialeParHa*$surface - getPoidsTotalCeuillette_intervalle($date1,$date2);
    }

    function getCoutRevientKg_intervalle($date1,$date2) {
        $sql = "select sum(montant) as somme from the_depense where date>'". $date1 ."' and date<'". $date2 ."'";

        $depense = connect()->query($sql)->fetch(PDO::FETCH_ASSOC)['somme'];
        return $depense/getPoidsTotalCeuillette_intervalle($date1,$date2);
    }

//    echo getPoidsTotalCeuillette_intervalle("2023-2-1","2026-2-10") . "\n";
//    echo getPoidsRestantParcelle_intervalle("2023-2-1","2026-2-10") . "\n";
//    echo getCoutRevientKg_intervalle("2023-2-1","2026-2-10") . "\n";
//    echo getCoutRevientKg();
?>
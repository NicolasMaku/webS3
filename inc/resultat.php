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

//    echo getPoidsTotalCeuillette() . "\n";
//    echo getPoidsRestantParcelle() . "\n";
//    echo getCoutRevientKg();
?>
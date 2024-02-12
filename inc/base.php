<?php
    require_once('Crud.php');
    function connect(){
        try {
            return new PDO('mysql:host=localhost;dbname=salaire;charset=utf8','root','root');

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
            return null;
        }
    }
?>
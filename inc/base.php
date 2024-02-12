<?php
    require_once('Crud.php');
    require_once ("../config.php");
    function connect(){
        try {
            global  $db_url,
                    $db_user,
                    $db_password
            ;
            return new PDO($db_url ,$db_user, $db_password);

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
            return null;
        }
    }
?>
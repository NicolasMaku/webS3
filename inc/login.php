<?php
    include_once 'base.php';
    include_once 'Crud.php';

    function testLogin($email,$password) {
        $sql = "select * from the_user where email=:email and password=:password";
        $requete = connect()->prepare($sql);

        $requete->bindValue(':email',$email);
        $requete->bindValue(':password',$password);
        $requete->execute();

        if ($requete->rowCount() == 1) return $requete->fetch(PDO::FETCH_ASSOC)['id'];
        else return false;
    }

//    echo testLogin("utilisateur1@email.com","motdepasse1");
?>
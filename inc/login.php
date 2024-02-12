<?php
    include_once 'base.php';
    include_once 'Crud.php';

    function testLogin($email,$password) {
        $sql = "select * from the_user where email=:email and password=:password";
        $requete = connect()->prepare($sql);

        $requete->bindValue(':email',$email);
        $requete->bindValue(':password',$password);
        $requete->execute();

        if ($requete->rowCount() == 1) {
            $user = $requete->fetch(PDO::FETCH_ASSOC);
            return [$user['id'],$user['admin']];
        }
        else return false;
    }

//    var_dump(testLogin("john@example.com","password123"));
?>
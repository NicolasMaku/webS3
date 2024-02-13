<?php

function get_action($get, $post){
    if(isset($get['action'])) return $get['action'];

    if(isset($post['action'])) return $post['action'];

    return null;
}

function alert($msg){
    echo "<script>alert('$msg')</script>";
}

function check_session($session) {
    if(!isset($session['idUser'])){
        header("location:../pages/login.php");
    }
}

function check_back_office($session) {
    if(!isset($session['idUser'])){
        header("location:../pages/login.php");
        return;
    }

    if($session['is_admin'] === false){
        header("location:../template/frontModel.php?page=card.php");
    }
}

function check_front_office($session) {
    if(!isset($session['idUser'])){
        header("location:../pages/login.php");
        return;
    }

    if($session['is_admin'] === true){
        header("location:../template/backModel.php?page=card.php");
    }
}
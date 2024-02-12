<?php

function get_action($get, $post){
    if(isset($get['action'])) return $get['action'];

    if(isset($post['action'])) return $post['action'];

    return null;
}

function alert($msg){
    echo "<script>alert('$msg')</script>";
}
<?php
date_default_timezone_set('Asia/Jakarta');

$con = mysqli_connect('localhost:3308','root','','lalilaimam');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

function base_url($url = null){
    $base_url = "http://localhost:8080/lailaimam/public/";
    if($url != null){
        return $base_url."/".$url;
    }else{
        return $base_url;
    }
}
?>
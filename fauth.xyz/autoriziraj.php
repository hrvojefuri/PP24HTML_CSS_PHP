<?php

if(!isset($_POST['id'])){
    header('location: index.php');
    exit;
}

if($_POST['id']!='21'){
    header('location: index.php');
    exit;
}


session_start();
$_SESSION['autoriziran']=21;
header('location: privatno.php');

?>
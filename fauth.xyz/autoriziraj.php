<?php

if(!isset($_POST['username'])){
    header('location: index.php');
    exit;
}

if($_POST['username']!='HrvojeFuri'){
    header('location: index.php');
    exit;
}

if(!isset($_POST['password'])){
    header('location: index.php');
    exit;
}

if($_POST['password']!='2110988'){
    header('location: index.php');
    exit;
}


session_start();
$_SESSION['autoriziran']='HrvojeFuri' && 2110988;
header('location: privatno.php');

?>
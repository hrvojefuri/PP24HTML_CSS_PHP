<?php

session_start();
unset($_SESSION['autoriziran']);
header('location: index.php');

?>
<?php

session_start();
if(!isset($_SESSION['autoriziran'])){
    header('location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'zaglavlje.php'; ?>
</head>
<body>
    
    <a href="odjava.php" class="button success">Odjavi se</a>

    <?php include_once 'skripte.php'; ?>
</body>
</html>
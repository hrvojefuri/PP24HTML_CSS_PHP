<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'zaglavlje.php'; ?>
</head>
<body>

    <form class="form" action="ciklickmatrica.php" method="get">
        Broj redaka: <input type="number" name="brojRedaka">
        Broj stupaca: <input type="number" name="brojStupaca">
        <input class="button success" type="submit">
    </form>

    <?php

    if (isset($_GET['brojStupaca'])){
        $bs = $_GET['brojStupaca'];
    }else{
        $bs = 0;
    }

    if (isset($_GET['brojStupaca'])){
        $bs = $_GET['brojStupaca'];
    }else{
        $bs = 0;
    }

    ?>
    
</body>
</html>
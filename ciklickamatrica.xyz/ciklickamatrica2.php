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

    // definiranje veličine tablice/broja polja
    $bp = $br * $bs;

    // decrement vrijednosti kako bi se sačuvao niz

    $br--;
    $bs--;

    // postavljanje koordinata matrice

    $minr=0;
    $mins=0;
    $maxr=$br;
    $maxs=$bs;

    // brojač za ispis ćelija

    $p = 1;

    // kreiranje matrice

    $matrica=[];

    

    ?>
    
</body>
</html>
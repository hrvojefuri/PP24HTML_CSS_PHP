<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'zaglavlje.php'; ?>
</head>
<body>

    <form class="form" action="ciklickamatrica1.php" method="get">
        Broj redaka: <input type="number" name="brojRedaka">
        Broj stupaca: <input type="number" name="brojStupaca">
        <input class="button success" type="submit" value="Izradi tablicu">
    </form>

   <?php
        if(isset($_GET['brojRedaka'])){
            $br = $_GET['brojRedaka'];
        }else{
            $br = 0;
        }
        
        if(isset($_GET['brojStupaca'])){
            $bs = $_GET['brojStupaca'];
        }else {
            $bs = 0;
        }

        // ukupan broj polja u tablici

        $bp= $br*$bs;

        // decrement vrijednosti kako bi se sačuvao niz

        $br--;
        $bs--;

        // koordinate vanjskih točaka matrice

        $minr=0;
        $mins=0;
        $maxr=$br;        
        $maxs=$bs;

        // brojač za ispis ćelija

        $p=1;

        // kreiranje matrice

       $matrica=[];

        while($p <= $bp){
            for($i=$maxs;$i>=$mins;$i--){
                $matrica[$maxr][$i] = $p++;
            }
            $maxr--;

            if ($p >= $bp)
            break;

            for($j=$maxr;$j>=$minr;$j--){
                $matrica[$j][$mins] = $p++;
            }
            $mins++;

            if ($p >= $bp)
            break;

            for($i=$mins;$i<=$maxs;$i++){
               $matrica[$minr][$i] = $p++;
            }
            $minr++;

            if ($p >= $bp)
            break;

            for($j=$minr;$j<=$maxr;$j++){
               $matrica[$j][$maxs] = $p++;
            }
            $maxs--;
        }
        
              
       echo '<table>';
        for($i=0;$i<=$br;$i++){
            echo '<tr>';
            for($j=0;$j<=$bs;$j++){
                echo '<td>'. $matrica[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';


        
    ?>
</body>
</html>
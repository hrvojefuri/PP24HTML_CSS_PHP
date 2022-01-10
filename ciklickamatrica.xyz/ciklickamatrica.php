<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'zaglavlje.php'; ?>
</head>
<body>

<div class="container form">
        <div class="row">
            <form action="ciklickamatrica.php" method="get">
                Broj redaka: <input type="number" name="brojRedaka">
                Broj stupaca: <input type="number" name="brojStupaca">
                <input type="submit" value="Izradi tablicu">
            </form>
        </div>
    </div>

   <?php
        if(isset($_GET['brojRedaka'])){
            $br = $_GET['brojRedaka'];
        }else{
            $br=0;
        }
        
        if(isset($_GET['brojStupaca'])){
            $bs = $_GET['brojStupaca'];
        }else {
            $bs=0;
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

            for($j=$maxr;$j>=$minr;$j--){
                $matrica[$j][$mins] = $p++;
            }
            $mins++;

            for($i=$mins;$i<=$maxs;$i++){
               $matrica[$minr][$i] = $p++;
            }
            $minr++;

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
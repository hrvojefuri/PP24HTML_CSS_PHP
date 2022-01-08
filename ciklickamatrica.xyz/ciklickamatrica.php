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
                <input type="submit" name="Izradi tablicu">
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

        $xl=$bs;
        $xd=0;
        $yg=$br;
        $yd=0;

        // brojač za ispis ćelija

        $p=1;

        // kreiranje matrice

        $matrica=[];

        while($p <= $bp){
            for($i=$xd;$i<=$xl;$i++){
                $matrica[$yd][$i] = $p++;
            }
            $yd++;

           for($i=$yd;$i<=$yg;$i++){
                $matrica[$xl][$i] = $p++;
           }
           $xl--;

           for($i=$xl;$i<=$xd;$i--){
               $matrica[$yg][$i] = $p++;
           }
           $yg--;

           for($i=$yg;$i<=$yd;$i--){
               $matrica[$xd][$i] = $p++;
           }
           $xd++;
        }

        echo '<table>';
        for($i=0;$i<=$br;$i++){
            echo '<tr>';
            for($j=0;$j<=$bs;$j++){
                echo '<td>'. $matrica[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>'
        

        
    ?>
</body>
</html>
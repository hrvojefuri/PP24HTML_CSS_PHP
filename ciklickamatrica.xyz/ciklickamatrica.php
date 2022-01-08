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

        $xl=0;
        $xd=$bs;
        $yg=0;
        $yd=$br;

        // brojač za ispis ćelija

        $p=1;

        // kreiranje matrice

       $matrica=[];

        while($p <= $bp){
            for($i=$xl;$i>=$xd;$i--){
                $matrica[$yd][$i] = $p++;
            }
            $yd--;
            break;

            for($j=$yg;$j>=$yd;$j--){
                $matrica[$xl][$j] = $p++;
            }
            $xl++;
            break;

            for($i=$xd;$i<=$xd;$i++){
               $matrica[$yg][$i] = $p++;
            }
            $yg++;
            break;

            for($j=$yg;$j>=$yd;$j++){
               $matrica[$xd][$j] = $p++;
            }
            $xd--;
        }
        
        print_r ($matrica);

       /*echo '<table>';
        for($i=0;$i<$br;$i++){
            echo '<tr>';
            for($j=0;$j<$bs;$j++){
                echo '<td>'. $matrica[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';*/


        
    ?>
</body>
</html>
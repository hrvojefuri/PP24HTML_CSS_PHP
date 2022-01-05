<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'zaglavlje.php'; ?>
</head>
<body>
    <form action='ciklickamatrica.php' method='get'>
        Broj redaka: <input type="number" name="brojRedaka"> <br>
        Broj stupaca: <input type="number" name="brojStupaca"><br>
        <input type='submit'>
    </form>

    <?php
        if(isset($_GET['brojRedaka'])){
            $br = $_GET['brojRedaka'];
        }else{
            echo 'Obavezno unijeti broj redaka';
        }
        
        if(isset($_GET['brojStupaca'])){
            $bs = $_GET['brojStupaca'];
        }else {
            echo 'Obavezno unijeti broj stupaca';
        }

        
    ?>
</body>
</html>
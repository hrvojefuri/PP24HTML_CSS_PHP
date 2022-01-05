<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'zaglavlje.php'; ?>
</head>
<body>
    <label>
        Broj redaka: <input type="number" method="get" name="brojRedaka">
        Broj stupaca: <input type="number" method="get" name="brojStupaca">
        submit
    </label>

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
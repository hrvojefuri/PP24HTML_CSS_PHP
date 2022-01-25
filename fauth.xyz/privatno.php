<?php

session_start();
if(!isset($_SESSION['autoriziran'])){
    header('location: index.php');
    exit;
}

if(!isset($_SESSION['podaci'])){
    $_SESSION['podaci'] = [];
}

if(!isset($_POST['opis slike'])
    && isset($_POST['slika'])
    && count($_POST)===2){
        $_SESSION['podaci'][]=$_POST;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'zaglavlje.php'; ?>
</head>
<body>

    <div class="grid-container">
      <div class="grid-x grid-padding-x" id="<?php echo 'stranica'; ?>">
        <div class="large-12 cell">
          <div class="callout">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="grid-x grid-padding-x">
                    <div class="large-5 cell">
                        <label for="ime">Ime</label>
                        <input type="text" name="ime" id="ime">
                    </div>
                    <div class="large-5 cell">
                        <label for="prezime">Prezime</label>
                        <input type="text" name="prezime" id="prezime">
                    </div>
                    <div class="large-2 cell" style="padding: 25px;">
                        <input type="submit" value="Unesi" class="button">
                    </div>                    
                </div>
            </form>
            <ol>
                <?php foreach ($_SESSION['podaci'] as $p): ?>
                    <li><?php echo $p['ime'] . ' ' . $p['prezime'] ?></li>
                <?php endforeach ?>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <a href="odjava.php" class="button success">Odjavi se</a>

    <?php include_once 'skripte.php'; ?>
</body>
</html>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'zaglavlje.php'; ?>
  </head>

  <body>

  <form action="autoriziraj.php" method="post">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label for="id">ID
          <input type="text" placeholder="ID">
        </label>
      </div>      
    </div>
  </div>
  <input type="submit" class="button success" value="Prijava">  
</form>
    
    <?php include_once 'skripte.php'; ?>
  </body>
</html>

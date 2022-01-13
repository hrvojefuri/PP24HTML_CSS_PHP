
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'zaglavlje.php'; ?>
  </head>

  <body>

    <form action="autoriziraj.php" method="post">
      <label for="id">ID</label>
      <input type="text" name="id" />
      <input type="submit" value="Prijava">
    </form>
    
    <?php include_once 'skripte.php'; ?>
  </body>
</html>

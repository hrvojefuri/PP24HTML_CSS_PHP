<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once 'zaglavlje.php'; ?>
</head>
<body>

  <form action="autoriziraj.php" method="post">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="medium-6 cell">
          <label for="username">Username</label>
            <input type="text" name="username" id="username">
          <label for="password">Password</label>
            <input type="text" name="password" id="password">
            <input type="submit" class="button success" value="Prijava">         
        </div>      
      </div>
    </div>      
  </form>
  
  <?php include_once 'skripte.php'; ?>
</body>
</html>
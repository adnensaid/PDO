<?php
include_once 'traitement.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>PDO</title>
</head>
<body>
  <ul>
    <?php foreach($friends as $friend){ ?>
    <li><?= $friend['firstname']." ".$friend['lastname']; ?> </li> 
    <?php } ?>
  </ul>  
  <form action="index.php" method="post">
    <div class="container">
      <div class="mb-3">
        <label for="firstname">firstname</label>
        <input type="text" name="firstname" class="form-control" />    
      </div>
      <div class="mb-3">
        <label for="lastname" class="form-label">lastname</label>
        <input type="text" name="lastname" class="form-control"/>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
  </form>
</body>
</html>
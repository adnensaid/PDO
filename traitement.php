<?php
  require_once '_connec.php';
  $pdo = new PDO(DSN, USER, PASS);
  $firstname = "";
  $lastname = "";
  $query = "SELECT * FROM friend";
  $statement = $pdo->query($query);
  $friends = $statement->fetchAll(PDO::FETCH_ASSOC);

  if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $query = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
    $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
    $statement->execute();

    header('Location: index.php');
    die();
  }

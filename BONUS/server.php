<?php

include __DIR__ . "/database.php";

$author = $_GET['author'];

if (empty($author)) {
  header('Content-Type: application/json');
  echo json_encode($database);
} else {
    $db_filtered = [];
      foreach ($database as $album) {
        if ($author  == strtolower($album['author'])) {
          $db_filtered[] = $album;
        }

      }
      header('Content-Type: application/json');
      echo json_encode($db_filtered);

}


 ?>

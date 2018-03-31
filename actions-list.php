<?php

require('config.php');

try {
  $query = $conn->query('SELECT * from Actions');
  $query->execute();

  $result = $query->fetchAll();
  // $result = $query->fetchAll(PDO::FETCH_ASSOC);

  echo '<br>';

  foreach($result as $row) {
    echo 'Category: ' . $row['category'] . '<br>';
    echo 'Action: ' . $row['action'] . '<br><hr>';
  }
}
catch(PDOException $e)
{
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>

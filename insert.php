<?php

require('config.php');

include('index.php');

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO Actions (id, category, action)
    VALUES (:id, :category, :action)");
      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':category', $category);
      $stmt->bindParam(':action', $action);

  // insert a row
  $id = "NULL";
  $category = $_POST["category"];
  $action = $_POST["action"];
  $stmt->execute();

  echo "<br>New action created successfully!<br>";
}
catch(PDOException $e)
{
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>

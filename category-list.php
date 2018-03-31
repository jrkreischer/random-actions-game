<?php
require('config.php');

$query = $conn->query('SELECT DISTINCT(category) from Actions ');
$query->execute();

$categories = $query->fetchAll();
?>

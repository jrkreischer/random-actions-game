<?php

require('config.php');
include('play.php');
?>

<div class="page-wrap">

  <?php

  $category = $_POST['cat_option'];

  // echo 'Category: ' . $category = $_POST['cat_option'];
  // echo '<br><br>';

  try {
    if (isset($_POST['cat_option']) && $_POST['cat_option'] !== '' ) {
      // Category selected, get random action in category
      $query = $conn->prepare('SELECT * from Actions WHERE category = :category ORDER BY RAND() limit 1');
      $query->bindParam(':category', $category);
      $query->execute();
      $result = $query->fetch();

      echo '<br>';
      // echo $category . ' - Category selected!<br><br>';

      echo 'Category: ' . $result['category'] . '<br>';
      echo 'Action: ' . $result['action'] . '<br><hr>';
    }
    else {
      // No category selected, get random action
      $query = $conn->query('SELECT action from Actions ORDER BY RAND() limit 1');
      $query->execute();
      $result = $query->fetch();

      // echo 'No Category selected!<br><br>';

      echo '<br>';

      echo 'Category: All<br>';
      echo 'Action: ' . $result['action'] . '<br><hr>';
    }

    echo '<br><br>';
  }
  catch(PDOException $e)
  {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
  ?>

</div><!-- .page-wrap -->

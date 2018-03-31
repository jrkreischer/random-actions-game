<?php include('header.php'); ?>

  <div class="page-wrap">

    <section class="action-form">
      <form action="insert.php" method="POST">
        <label>Enter a category for the action:</label>
        <input type="text" name="category" size="50" placeholder="Category...">
        <br><br>
        <label>Enter an action:</label>
        <textarea name="action" rows="10" cols="50" placeholder="Action..."></textarea>
        <br>
        <input type="submit" value="Submit">
      </form>
    </section><!-- .action-form -->

  </div><!-- .page-wrap -->

<?php include('footer.php'); ?>

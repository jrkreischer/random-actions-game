<?php include('header.php'); ?>
<?php include('category-list.php'); ?>

  <div class="page-wrap">

    <section class="random-action">

      <form action="get-action.php" method="POST">
        <select name="cat_option">
          <option value="">All</option>
          <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['category']; ?>">
              <?php echo $category['category']; ?>
            </option>
          <?php endforeach; ?>
        </select>

        <input type="submit" value="Let's Go!">
      </form>

    </section><!-- .random-action -->

  </div><!-- .page-wrap -->

<?php include('footer.php'); ?>

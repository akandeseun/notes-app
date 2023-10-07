<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>

<?php require "partials/banner.php"; ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    <!-- <h1>Create a note</h1> -->

    <form action="" method="POST">
      <label for="body">Description</label>
      <div><textarea name="body" id="name"></textarea></div>
      <p>
        <button type="submit">Create</button>
      </p>
    </form>
  </div>
</main>
<?php require "partials/footer.php"; ?>
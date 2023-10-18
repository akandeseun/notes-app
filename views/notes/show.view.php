<?php require base_path("/views/partials/head.php"); ?>
<?php require base_path("/views/partials/nav.php"); ?>

<?php require base_path("/views/partials/banner.php"); ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    <p class="mb-6 text-blue-500 hover:underline">
      <a href="/notes">go back...</a>
    </p>
    <p><?= htmlspecialchars($note["body"])  ?></p>

    <footer class="mt-6">
      <a class="mb-6 text-green-600 border border-current px-3 py-1 rounded-md" href="/note/edit?id=<?= $note["id"] ?>">edit note</a>
    </footer>

    <p>

    </p>


  </div>
</main>
<?php require base_path("/views/partials/footer.php"); ?>
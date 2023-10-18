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
      <a class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600" href="/note/edit?id=<?= $note["id"] ?>">edit note</a>
      <form class="mt-6" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type=hidden name="id" value="<?= $note["id"] ?>">
        <button class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
      </form>
    </footer>

    <p>

    </p>


  </div>
</main>
<?php require base_path("/views/partials/footer.php"); ?>
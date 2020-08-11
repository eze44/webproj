<?php
  require_once(__DIR__ . "/../../domain/database.php");
  require_once(__DIR__ . "/../../domain/services/authorservice.php");
  $db = new DatabaseConnection();
  $conn = $db->connect();
  $authorService = new AuthorService($conn);
  if (!isset($_GET["paginate"])) {
    $_GET["paginate"] = 1;
  }
  $authors = $authorService->getAuthors($_GET["paginate"]);
?>

<div>
  <div class="mt-5">
    <a href="./views/newauthor.php" class="btn btn-primary">Create</a>
  </div>

  <div class="mt-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($authors as $key => $p): ?>
          <tr>
            <th scope="row"><?php echo $p->id; ?></th>
            <td><?php echo $p->getFullName(); ?></td>
            <td><?php echo $p->email; ?></td>
            <td><a href="#" class="btn btn-warning">Edit</a></td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>

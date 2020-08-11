<?php
  require_once(__DIR__ . "/../../domain/database.php");
  require_once(__DIR__ . "/../../domain/services/postservice.php");
  $db = new DatabaseConnection();
  $conn = $db->connect();
  $postService = new PostService($conn);
  if (!isset($_GET["paginate"])) {
    $_GET["paginate"] = 1;
  }
  $posts = $postService->paginate($_GET["paginate"]);
?>

<div>
  <div class="mt-5">
    <a href="./views/newpost.php" class="btn btn-primary">Create</a>
  </div>

  <div class="mt-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($posts as $key => $p): ?>
          <tr>
            <th scope="row"><?php echo $p->id; ?></th>
            <td><?php echo $p->title; ?></td>
            <td><?php echo $p->author->getFullName(); ?></td>
            <td><a href="./views/editpost.php?post_id=<?php echo $p->id; ?>" class="btn btn-warning">Edit</a></td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>
<?php include("./partials/paginate.php"); ?>

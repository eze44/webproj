<?php
   require_once(__DIR__ . "/../partials/header.php");
?>

  <div class="d-flex" id="wrapper">
    <?php require_once(__DIR__ . "/../partials/menu.php"); ?>
    <div class="container">
      <form class="form-control" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
        <div class="form-group">
          <label>Content</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
        </div>
        <div class="form-group">
         <label>Image</label>
         <input type="file" class="form-control-file" name="image">
       </div>
        <input name="submitter" type="submit" class="form-control btn btn-success" value="Save">
      </form>
    </div>
  </div>

  <?php
    if (isset($_POST["submitter"])) {
      require_once(__DIR__ . "/../../domain/database.php");
      require_once(__DIR__ . "/../../domain/services/uploadservice.php");
      require_once(__DIR__ . "/../../domain/services/postservice.php");
      $db = new DatabaseConnection();
      $conn = $db->connect();
      $postService = new PostService($conn);
      $uploadService = new UploadService();

      $data["title"] = $_POST["title"];
      $data["content"] = $_POST["content"];
      $data["image_path"] = "/images/" . $_FILES["image"]["name"];
      $data["author_id"] = $_SESSION["user_id"];

      $saved = $postService->save($data);
      $uploadService->upload($_FILES["image"]["tmp_name"], $_FILES["image"]["name"]);
      if ($saved) {
        header("Location: http://localhost/dashboard/?page=posts");
        exit();
      }
    }
  ?>

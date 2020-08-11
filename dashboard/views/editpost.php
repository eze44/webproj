<?php
   require_once(__DIR__ . "/../partials/header.php");
   require_once(__DIR__ . "/../../domain/database.php");
   require_once(__DIR__ . "/../../domain/services/postservice.php");
   $post_id = $_GET["post_id"];

   $db = new DatabaseConnection();
   $conn = $db->connect();
   $postService = new PostService($conn);
   $post = $postService->getById($post_id);
?>

  <div class="d-flex" id="wrapper">
    <?php require_once(__DIR__ . "/../partials/menu.php"); ?>
    <div class="container">
      <form class="form-control" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $post->title; ?>">
        </div>
        <div class="form-group">
          <label>Content</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"><?php echo $post->getContent(); ?></textarea>
        </div>
        <div class="form-group">
         <label>Image</label>
         <img src="<?php echo $post->image_path; ?>" width="400" height="300"/>
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

      $data["id"] = $post_id;
      $data["title"] = $_POST["title"];
      $data["content"] = $_POST["content"];
      // $data["image_path"] = "/images/" . $_FILES["image"]["name"];
      // $data["author_id"] = $_SESSION["user_id"];

      $saved = $postService->update($data);
      // $uploadService->upload($_FILES["image"]["tmp_name"], $_FILES["image"]["name"]);
      if ($saved) {
        header("Location: http://localhost/dashboard/?page=posts");
        exit();
      }
    }
  ?>

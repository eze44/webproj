<?php
   require_once(__DIR__ . "/../partials/header.php");
?>

  <div class="d-flex" id="wrapper">
    <?php require_once(__DIR__ . "/../partials/menu.php"); ?>
    <div class="container">
      <form class="form-control" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label>First name</label>
          <input type="text" class="form-control" name="first_name" placeholder="First name">
        </div>
        <div class="form-group">
          <label>Last name</label>
          <input type="text" class="form-control" name="last_name" placeholder="Last name">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label>Role</label>
          <select class="form-control" name="role_id">
            <option></option>
            <option value="1">Admin</option>
            <option value="2">User</option>
          </select>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="">
        </div>
        <input name="submitter" type="submit" class="form-control btn btn-success" value="Save">
      </form>
    </div>
  </div>

  <?php
    if (isset($_POST["submitter"])) {
      require_once(__DIR__ . "/../../domain/database.php");
      require_once(__DIR__ . "/../../domain/services/authorservice.php");
      $db = new DatabaseConnection();
      $conn = $db->connect();
      $authorService = new AuthorService($conn);

      $data["first_name"] = $_POST["first_name"];
      $data["last_name"] = $_POST["last_name"];
      $data["email"] = $_POST["email"];
      $data["password"] = $_POST["password"];
      $data["role_id"] = $_POST["role_id"];

      $saved = $authorService->save($data);
      if ($saved) {
        header("Location: http://localhost/dashboard/?page=authors");
        exit();
      }
    }
  ?>

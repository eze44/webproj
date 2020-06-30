<?php
  require_once("./partials/header.php");
  require_once("../domain/models/role.php");
  session_start();
  if (!isset($_SESSION["user_id"]) || !isset($_SESSION["role"])) {
    header("Location: http://localhost/login.php");
    exit();
  }
?>

  <div class="d-flex" id="wrapper">
    <?php require_once("./partials/menu.php"); ?>

    <div id="page-content-wrapper">
      <div class="container">
        <?php
          switch($_GET["page"]) {
            case "posts":
              include("./views/posts.php");
              break;
            case "resources":
              include("./views/resources.php");
              break;
            case "authors":
              include("./views/authors.php");
              break;
            default:
              include("./views/posts.php");
              break;
          }
        ?>
      </div>
    </div>
  </div>

<?php
  require_once("./partials/footer.php");
?>

<?php
  require_once("./partials/header.php");
  require_once("../domain/models/role.php");
  session_start();
  if (!isset($_SESSION["user_id"]) || !isset($_SESSION["role"])) {
    header("Location: http://localhost/login.php");
    exit();
  }
  if ((int)$_SESSION["role"] != Role::$USER_ROLE) {
    header("Location: http://localhost/login.php");
    exit();
  }
?>

  <div class="d-flex" id="wrapper">
    <?php require_once("./partials/menu.php"); ?>

    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
      </div>
    </div>
  </div>

<?php
  require_once("./partials/footer.php");
?>

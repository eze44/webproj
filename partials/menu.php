<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container d-flex align-items-center px-4">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
      aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <form action="search.php" class="searchform order-lg-last">
      <div class="form-group">
        <input type="text" name="search" class="form-control pl-3" placeholder="Search">
      </div>
    </form>
    <form action="#" class="order-lg-last">
      <a href="/login.php" type="button" class="btn btn-primary">Login</a>
    </form>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <?php
        $page = $_SERVER['REQUEST_URI'];
      ?>
      <ul class="navbar-nav mr-auto">
        <div class="dropdown <?php echo ($page == "/index.php" || $page == "/") ? "active" : "" ?> home-nav">
          <a href="index.php" class="nav-link">Home</a>
          <div class="dropdown-content"></div>
        </div>
        </li>

        <div class="dropdown about-nav <?php echo ($page == "/about.php") ? "active" : "" ?>">
          <a href="about.php" class="nav-link">About us</a>
        </div>
        </li>
        <div class="dropdown action-nav <?php echo ($page == "/team.php") ? "active" : "" ?>">
          <a href="team.php" class="nav-link">Authors</a>
        </div>
        </li>
        </li>
        </li>
        <div class="dropdown about-nav <?php echo ($page == "/news.php") ? "active" : "" ?>">
          <a href="news.php" class="nav-link">Resources</a>
          <div class="dropdown-content"></div>
        </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

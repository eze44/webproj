<?php
	require_once("./partials/header.php");
  $post_id = $_GET["post_id"];
  if (isset($post_id) && $post_id != null) {
    require_once("./domain/database.php");
  	require_once("./domain/services/postservice.php");
  	$db = new DatabaseConnection();
  	$conn = $db->connect();
  	$postService = new PostService($conn);

    $post = $postService->getById($post_id);
  }
?>

<body>
	<?php require_once("./partials/menu.php"); ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo $post->image_path; ?>);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9  text-center">
          <h1 class="mb-2 bread"><?php echo $post->title; ?></h1>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ">
          <h2 class="mb-3"><?php echo $post->title; ?></h2>
          <h3 class="light-gray"><?php echo $post->author->getFullName(); ?></h3>
          <?php echo $post->getContent(); ?>

        </div> <!-- .col-md-8 -->

        <div class="col-lg-4 sidebar ">
        </div><!-- END COL -->
      </div>
    </div>
  </section>
  <?php require_once("./partials/footer.php");?>

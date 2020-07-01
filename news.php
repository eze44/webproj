<?php
require_once("./partials/header.php");
require_once("./domain/database.php");
require_once("./domain/services/postservice.php");
$db = new DatabaseConnection();
$conn = $db->connect();
$postService = new PostService($conn);
$posts = $postService->getLatestPosts();

if (!isset($_GET["paginate"])) {
	$_GET["paginate"] = 1;
}

$resources = $postService->paginate($_GET["paginate"], 6);
?>

<body>
	<?php require_once("./partials/menu.php");?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9  text-center">
          <h1 class="mb-2 bread">News</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section bg-light">
    <div class="container">
			<?php include("./partials/paginate.php"); ?>
      <div class="row">
				<?php foreach($resources as $res): ?>
					<div class="col-md-6 col-lg-4 ">
						<div class="blog-entry">
							<a href="blog-single.html" class="block-20 d-flex align-items-end"
								style="background-image:url(<?php echo $res->image_path; ?>)">
								<div class="meta-date text-center p-2">
									<span class="day">26</span>
									<span class="mos">June</span>
									<span class="yr">2019</span>
								</div>
							</a>
							<div class="text bg-white p-4">
								<h3 class="heading"><a href="#"><?php echo $res->title; ?></a></h3>
								<p>Corporate publication</p>
								<div class="d-flex align-items-center mt-4">
									<p class="mb-0"><a href="<?php echo "single.php?post_id=" . $res->id?>" class="btn btn-primary">More <span
												class="ion-ios-arrow-round-forward"></span></a></p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php	require_once("./partials/footer.php");?>

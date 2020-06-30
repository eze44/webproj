<?php
	require_once("./partials/header.php");
	require_once("./domain/database.php");
	require_once("./domain/services/postservice.php");
	$db = new DatabaseConnection();
	$conn = $db->connect();
	$postService = new PostService($conn);
	$posts = $postService->getLatestPosts();
	$resources = $postService->paginate(1, 6);
?>

<body>
	<?php require_once("./partials/menu.php"); ?>
	<section class="home-slider owl-carousel">
		<?php foreach($posts as $post): ?>
		<div class="slider-item" style="background-image:url(<?php echo $post->image_path; ?>)">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start trans-bg"
					data-scrollax-parent="true">
					<div class="col-md-7  pr-4 top-bg-cover-img-news"
						style="background-image: url(<?php echo $post->image_path; ?>);">
					</div>
					<div class="col-md-5  pl-2">
						<h1 class="mb-4"><?php echo $post->title; ?></h1>
						<span><i class="icon-calendar mr-2"></i><?php echo $post->created_at; ?></span>
						<p><a href="<?php echo "single.php?post_id=" . $post->id?>" class="btn btn-primary px-4 py-3 mt-3">Read more</a></p>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	</section>

	<section class="ftco-services ftco-no-pb">
		<div class="container">
			<div class="row no-gutters main-headings">
				<div
					class="col-md-3 d-flex services align-self-stretch py-5 px-4  bg-primary yellowgreen-bg grow">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-teacher"></span>
						</div>
						<a href="education.html">
							<div class="media-body p-2 mt-3">
								<h3 class="heading">Test1</h3>
								<p>Lorem ipsum</p>
							</div>
						</a>
					</div>
				</div>
				<div
					class="col-md-3 d-flex services align-self-stretch py-5 px-4  bg-darken cadetblue-bg grow">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-reading"></span>
						</div>
						<a href="quality-assurance.html">
							<div class="media-body p-2 mt-3">
								<h3 class="heading">Test1</h3>
								<p>Lorem ipsum</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4  bg-primary grow">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-books"></span>
						</div>
						<a href="smart-governance.html">
							<div class="media-body p-2 mt-3">
								<h3 class="heading">Test1</h3>
								<p>Lorem ipsum</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4  bg-darken grow">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-jigsaw"></span>
						</div>
						<a href="blog-single.html">
							<div class="media-body p-2 mt-3">
								<h3 class="heading">Test1</h3>
								<p>Lorem ipsum</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-1">
				<div class="col-md-8 text-center heading-section  mt-3 fadeInUp d">
					<h2 class="mb-4 black-txt">Resources</h2>
				</div>
			</div>
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
									<p class="mb-0"><a href="#" class="btn btn-primary">PDF <span
												class="ion-ios-arrow-round-forward"></span></a></p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>			
			</div>
		</div>
	</section>

	<?php require_once("./partials/footer.php");?>

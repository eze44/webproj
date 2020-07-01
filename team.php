<?php
require_once("./partials/header.php");
require_once("./domain/database.php");
require_once("./domain/services/authorservice.php");

$db = new DatabaseConnection();
$conn = $db->connect();
$postService = new AuthorService($conn);
$authors = $postService->getAuthors();
?>

<body>
	<?php require_once("./partials/menu.php");?>

<section class="bg-light container mb-5">
	<div id="" class="container-fluid px-4">
		<div class="row justify-content-center">
			<?php foreach($authors as $author): ?>
				<div class="col-md-6 col-lg-3 ">
					<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch"
									style="background-image: url(images/profile.jpg);">
								</div>
							</div>
							<div class="text pt-3 text-center">
								<h3><?php echo $author->getFullName(); ?></h3>
								<span class="position mb-2"><?php echo $author->email; ?></span>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $author->email; ?>">Bio</button>
							</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php require_once("./partials/footer.php");?>

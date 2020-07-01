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
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Bio</button>
							</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Here we could add some bio for example
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require_once("./partials/footer.php");?>

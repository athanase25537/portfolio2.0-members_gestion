<?php
$title = 'Portfolio';
$i = 1;
ob_start();
?>
<section class="banner d-flex justify-content-center align-items-center pt-5">
	<div class="container my-5 py-5">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<h1 class="text-capitalise py-3 redressed banner-desc">I'm <?= $_SESSION['username'] ?> <br>
						a Full Stack Developper <br>
					Welcome to my Web Site</h1>
				<p>
					<a class="btn btn-order btn-lg me-5 merriweather">Commencer maintenant</a>
					<a href="index.php?action=add" class="btn btn-outline-info rounded-0 merriweather">Add Content</a>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="available merriweather py-5" id="projects">
    <div class="container">
        <div class="row">
			<h3 class="text-center text-dark merriweather m-5">Mes Projets</h3>
			<?php foreach($projects as $project): ?>
				<div class="card mb-3 border-0 rounded-0">
					<div class="row">
						<?php if($i % 2 == 0): ?>
							<div class="col-md-6">
								<div class="card-body">
									<h5 class="card-title"><?= $project['title'] ?></h5>
									<p class="card-text"><?= $project['description'] ?></p>
									<p class="card-text"><a href="#" class="text-muted btn"><?= $project['creation_date'] ?></a></p>
								</div>
							</div>
							<div class="col-md-6">
								<img src="../src/img/<?= $project['img_description'] ?>" class="img-fluid w-100" alt="...">
							</div>
						<?php else: ?>
							<div class="col-md-6">
								<img src="../src/img/<?= $project['img_description'] ?>" class="img-fluid" alt="...">
							</div>
							<div class="col-md-6">
								<div class="card-body">
									<h5 class="card-title"><?= $project['title'] ?></h5>
									<p class="card-text"><?= $project['description'] ?></p>
									<p class="card-text"><a href="#" class="text-muted btn"><?= $project['creation_date'] ?></a></p>
								</div>
							</div>
						<?php endif ?>
					</div>
				</div>
				<hr>
				<?php $i++ ?>
			<?php endforeach ?>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
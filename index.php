<?php
	require_once './config/db.php';
	require_once './config/functions.php';
	$games = allGames();
	if (empty($games)) {
		$games = install();
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Games</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-dark bg-primary">
			<div class="container">
				<a class="navbar-brand" href="#">
					Games
				</a>
			</div>
		</nav>
		<div class="container">
			<div class="row mt-4">
				<?php
				foreach ($games as $game) { ?>
					<div class="card my-2 mx-1" style="width: 18rem;">
						<img src="<?= $game->thumbnail ?>" class="card-img-top" alt="Image">
						<div class="card-body">
							<h5 class="card-title"><?= $game->title ?></h5>
							<p class="card-text"><?= $game->short_description ?></p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Genre
								<span class="badge bg-primary"><?= $game->genre ?></span>
							</li>
							<li class="list-group-item">Platform
								<span class="badge bg-primary"><?= $game->platform ?></span>
							</li>
							<li class="list-group-item">Publisher
								<span class="badge bg-primary"><?= $game->publisher ?></span>
							</li>
						</ul>
						<div class="card-body d-grid">
							<a href="<?= $game->game_url ?>" class="btn btn-block btn-primary" style="height: fit-content;" target="_blank">Open</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
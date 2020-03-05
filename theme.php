<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

		<link rel="stylesheet" href="<?= $Wcms->asset('css/bootstrap_ver4.3.1.css') ?>">
		<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
		
		<?= $Wcms->css() ?>
	</head>

	<body>
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>

		<header class="header">
			<p class="name">
				<?= $Wcms->get('config', 'siteTitle') ?>
			</p>
			<a id="menu-icon" href='home'>
				<img id="menu-icon-inner" src="themes/surreal/images/menu-icon-inner.svg" alt=""/> 
			</a>
		</header>
		<ul class="nav nav-tabs">
			<?= $Wcms->menu() ?>
		</ul>
		<div id='pageContainer'>
			<div id='centerColumn'>
				<?= $Wcms->page('content') ?>
			</div>
		</div>
		<!--
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center padding40">
					<?= $Wcms->page('content') ?>
				</div>
			</div>
		</div>

		<div class="container-fluid blueBackground whiteFont">
			<div class="row">
				<div class="col-lg-12 text-center padding40">
					<?= $Wcms->block('subside') ?>

				</div>
			</div>
		</div>
		-->
		<footer class="container-fluid">
			<div class="text-right padding20">
				<?= $Wcms->footer() ?>

			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<?= $Wcms->js() ?>
		<script src="main.js"></script>
	</body>
</html>

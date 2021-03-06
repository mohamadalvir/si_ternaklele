<!DOCTYPE html>
<html>

<head>
	<title><?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark box-shadow">
		<div class="container">
			<a class="navbar-brand" href="<?= BASEURL; ?>">SI Ternak Lele Ponpes Al-Furwan Muhammadiyah</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<?php
					//Tambah Menu di array ini
					$menus = array('Pembibitan', 'Penjadwalan', 'Panen');
					foreach ($menus as $menu) { ?>
						<a class="nav-item nav-link <?= ($data['judul'] == $menu ? 'active' : '') ?>" href="<?= BASEURL . '/' . strtolower($menu) ?>">
							<?= $menu ?>
							<?= ($data['judul'] == $menu ? '<span class="sr-only">(current)</span>' : '') ?>
						</a>
					<?php } ?>
					<a class="nav-item nav-link " href="<?= BASEURL . '/login/end' ?>">
						Logout </a>
				</div>
			</div>
		</div>
	</nav>
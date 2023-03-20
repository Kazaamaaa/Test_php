<?php include('include/head.php'); ?>
<?php include('include/navbar.php'); ?>

<div class="jumbotron">
	<h1 class="display-4">GAJI KARYAWAN</h1>
	<p class="lead">DATA-DATA GAJI KARYAWAN</p>
	<hr class="my-4">
	<form class="form-inline my-2 my-lg-0" action="index.php" method="get">
		<input class="form-control mr-sm-2" type="search" placeholder="Cari Pegawai" aria-label="Search" name="q">
		<input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Cari">
	</form>
</div>

<div class="container">
	<div class="card-columns">
		<!-- card list buku  -->
		<div class="card shadow-sm">
			<img src="..." class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Nip</h5>
				<h6 class="card-subtitle text-muted mb-3">Nama</h6>
				<p class="card-text">JK</p>
				<p class="card-text"><small class="text-muted">Gaji</small></p>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>
<?php include('include/foot.php') ?>
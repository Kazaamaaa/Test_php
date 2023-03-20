<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="index.php">PENGGAJIAN</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navMenu">
		<ul class="navbar-nav mr-auto">
			<?php if (isset($_SESSION['user'])) : ?>
				<li class="nav-item">
					<a class="nav-link" href="tampil.php">Data Gaji</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pencarian.php">Pencarian</a>
				</li>
			<?php endif; ?>
		</ul>
		<div class="form-inline my-2 my-lg-0">
			<?php if (!isset($_SESSION['user'])) : ?>
				<a href="register.php" class="btn btn-light mx-1">Register</a>
				<a href="login.php" class="btn btn-dark mx-1">Login</a>
			<?php else : ?>
				<a href="proses/logout.php" class="btn btn-dark mx-1">Logout</a>
			<?php endif; ?>
		</div>
	</div>
</nav>
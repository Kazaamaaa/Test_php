<?php include('include/head.php') ?>
<?php require_once('proses/otentikasi.php'); ?>
<?php include('include/navbar.php') ?>

<div class="container">
	<div class="row justify-content-lg-center mt-5">
		<div class="col-lg-8 col-sm-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4">Ubah Data Pegaawai</h5>
					<form action="proses/update.php" method="post" enctype="multipart/form-data">

						<?php
						include 'proses/koneksi.php';
						$id = $_GET['id'];
						$data = mysqli_query($koneksi, "select * from tblpegawai where id='$id'");
						while ($d = mysqli_fetch_array($data)) {
						?>
							<form method="post" action="proses/update.php">
								<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
								<div class="form-group">
									<input type="text" class="form-control" id="Nip" name="Nip" placeholder="Nip" value="<?php echo $d['Nip']; ?>">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama" value="<?php echo $d['Nama']; ?>">
								</div>
								<div class="form-group">
									<select type="text" class="form-control" id="Jk" name="Jk" placeholder="JenisKelamin" value="<?php echo $d['Jk']; ?>">
										<option value="Pria">Pria</option>
										<option value="Wanita">Wanita</option>
									</select>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="Gaji" name="Gaji" placeholder="Gaji" value="<?php echo $d['Gaji']; ?>">
								</div>
								<div class="form-group mt-4">
									<input type="submit" name="formubah" value="Ubah" class="btn btn-primary btn-block btn-lg">
							</form>
						<?php
						}
						?>

						</body>

						</html>
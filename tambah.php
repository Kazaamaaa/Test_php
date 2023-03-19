<?php include('include/head.php') ?>
<?php require_once('proses/otentikasi.php'); ?>
<?php include('include/navbar.php') ?>

<div class="container">
	<div class="row justify-content-lg-center mt-5">
		<div class="col-lg-8 col-sm-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4">Tambah Data Buku</h5>
					<form action="proses/tambah_aksi.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" class="form-control" id="Nip" name="Nip" placeholder="Nip">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama">
						</div>
						<div class="form-group">
							<select class="form-control" id="Jk" name="Jk" placeholder="Jenis Kelamin">
								<option value="">Pilih Jenis Kelamin</option>
								<option value="Pria">Pria</option>
								<option value="Wanita">Wanita</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="Gaji" name="Gaji" placeholder="Gaji">
						</div>
						<div class="form-group mt-4">
							<input type="submit" name="formtambah" id="simpan" value="Simpan" class="btn btn-primary btn-block btn-lg">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('include/foot.php') ?>
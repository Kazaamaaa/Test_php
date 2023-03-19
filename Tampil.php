<?php include('include/head.php') ?>
<?php require_once('proses/otentikasi.php'); ?>
<?php include('include/navbar.php') ?>

<div class="container">
	<div class="row mt-5">
		<div class="col">
			<a href="tambah.php" class="btn btn-primary float-right">Tambah Data Pegawai</a>
		</div>
	</div>
	<div class="row justify-content-lg-center mt-4">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4">Daftar Gaji Pegawai</h5>
					<!-- tabel daftar buku -->
					<table class="table table-hover table-responsive-md">
						<thead>
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Nip</th>
								<th scope="col">Nama</th>
								<th scope="col">JK</th>
								<th scope="col">Gaji</th>
								<th scope="col">Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include 'proses/koneksi.php';
							$id = 1;
							$data = mysqli_query($koneksi, "select * from tblpegawai");
							while ($d = mysqli_fetch_array($data)) {
							?>
								<tr>
									<td><?php echo $id++; ?></td>
									<td><?php echo $d['Nip']; ?></td>
									<td><?php echo $d['Nama']; ?></td>
									<td><?php echo $d['Jk']; ?></td>
									<td><?php echo rupiah($d['Gaji']); ?></td>
									<td>
										<a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-success">EDIT</a>
										<a href="proses/hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Apakah anda yakinn?');" class="btn btn-danger float-right">HAPUS</a>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('include/foot.php') ?>
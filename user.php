
<h2> Data User</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM user"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $pecah['nama_user']; ?></td>
		<td><?php echo $pecah['email_user']; ?></td>
		<td><?php echo $pecah['telepon_user']; ?></td>
		<td>
		<a href="index.php?halaman=hapususer&nama=<?php echo $pecah['nama_user'];?>" class="btn-danger btn">Hapus</a>
		</td>
		<!-- -->
	</tr>
	<?php $nomor++; ?>
	<?php } ?>
</table>

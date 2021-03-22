<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<style type="text/css">
	.text-center {
		text-align: center;
	}
</style>
<body>
	<h1 class="text-center">Daftar Mahasiswa</h1>

	<a href="tambah.php">+ Tambah Data Mahasiswa</a><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>NPM</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php $no = 1; while ( $row = mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?= $no++ ?></td>
			<td>
				<a href="hapus.php?id=<?= $row["id"] ?>">hapus</a> |
				<a href="edit.php?id=<?= $row["id"] ?>">ubah</a>
			</td>
			<td><img src="img/<?= $row["gambar"] ?>" height="50"></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["nrp"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["jurusan"] ?></td>
		</tr>
		<?php } ?>

	</table>
</body>
</html>
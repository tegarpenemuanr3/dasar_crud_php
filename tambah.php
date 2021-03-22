<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// var_dump($_POST);
if( isset($_POST["submit"])) {
	$nama = htmlspecialchars($_POST["nama"]);
	$nrp = htmlspecialchars($_POST["nrp"]);
	$email = htmlspecialchars($_POST["email"]);
	$jurusan = htmlspecialchars($_POST["jurusan"]);
	$gambar = htmlspecialchars($_POST["gambar"]);

	$query = "INSERT INTO mahasiswa VALUES('','$nama','$nrp','$email','$jurusan','$gambar')";
	mysqli_query($conn, $query);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<form action="" method="POST">
		<ul>
			<li>
				<label>Nama</label>
				<input type="text" name="nama">
			</li>
			<li>
				<label>NRP</label>
				<input type="text" name="nrp">
			</li>
			<li>
				<label>Email</label>
				<input type="text" name="email">
			</li>
			<li>
				<label>Jurusan</label>
				<input type="text" name="jurusan">
			</li>
			<li>
				<label>Gambar</label>
				<input type="text" name="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>
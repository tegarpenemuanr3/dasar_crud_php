<?php 

$conn = mysqli_connect("localhost","root","","phpdasar");

if(isset($_POST["submit"])) {
	// var_dump($_POST);

	$id = htmlspecialchars($_POST["id"]);
	$nama = htmlspecialchars($_POST["nama"]);
	$nrp = htmlspecialchars($_POST["nrp"]);
	$email = htmlspecialchars($_POST["email"]);
	$gambar = htmlspecialchars($_POST["gambar"]);

	$query = "UPDATE mahasiswa SET nama='$nama',nrp='$nrp',email='$email',gambar='$gambar' WHERE id='$id'";
	mysqli_query($conn, $query);
	header("location:index.php");
	exit;
}


$id = $_GET["id"];
// echo $id;

$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>

	<?php while ( $row = mysqli_fetch_assoc($result)) { ?>
	<form action="" method="POST">
		<ul>
			<li>
				<label>Nama</label>
				<input type="hidden" name="id" value="<?= $row["id"] ?>">
				<input type="text" name="nama" value="<?= $row["nama"] ?>">
			</li>
			<li>
				<label>NRP</label>
				<input type="text" name="nrp" value="<?= $row["nrp"] ?>">
			</li>
			<li>
				<label>Email</label>
				<input type="text" name="email" value="<?= $row["email"] ?>">
			</li>
			<li>
				<label>Jurusan</label>
				<input type="text" name="jurusan" value="<?= $row["jurusan"] ?>">
			</li>
			<li>
				<label>Gambar</label>
				<input type="text" name="gambar" value="<?= $row["gambar"] ?>">
			</li>
			<li>
				<button type="submit" name="submit">Update Data</button>
			</li>
		</ul>
	</form>
	<?php } ?>
</body>
</html>
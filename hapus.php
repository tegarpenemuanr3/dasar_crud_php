<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

$id = $_GET["id"];
// echo $id;

mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = '$id'");
header("Location:index.php");

?>
<?php
require '../../koneksi.php';
$nim=$_GET['nim'];

mysqli_query($db,
	"DELETE FROM mahasiswa
	WHERE nim='$nim'"
);
header("location:../index.php?p=mahasiswa");
?>
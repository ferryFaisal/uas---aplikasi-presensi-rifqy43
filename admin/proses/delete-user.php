<?php
require '../../koneksi.php';
$email=$_GET['email'];

mysqli_query($db,
	"DELETE FROM user
	WHERE email='$email'"
);
header("location:../index.php?p=user");
?>
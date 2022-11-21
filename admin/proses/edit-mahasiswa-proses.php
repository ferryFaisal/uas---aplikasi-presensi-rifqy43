<?php
require "../../koneksi.php";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$nim = $_POST['nim'];
$nama = test_input($_POST['nama']);
$kelas = $_POST['kelas'];

date_default_timezone_set("Asia/Jakarta");
$edited = date('Y-m-d H:i:s');

	
if(isset($_POST['simpan'])){

	$sql = 
	"UPDATE user
		SET nama='$nama', kelas='$kelas' WHERE nim='$nim'";
	$query = mysqli_query($db, $sql);

    if ($query === TRUE){
        echo '<script>alert("Data Mahasiswa Berhasil Diedit")</script>';
    }else{
        echo '<script>alert("Data Mahasiswa Gagal Diedit")</script>';
    }
    header("location:../index.php?p=mahasiswa");
}
?>
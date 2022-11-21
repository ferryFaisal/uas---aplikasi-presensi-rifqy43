<?php
require "../../koneksi.php";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$nim = test_input($_POST['nim']);
$nama = test_input($_POST['nama']);
$kelas = $_POST['kelas'];

	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO mahasiswa
		VALUES('$nim','$nama', '$kelas')";
	$query = mysqli_query($db, $sql);

    if ($query === TRUE){
        echo '<script>alert("User Berhasil Ditambahkan")</script>';
    }else{
        echo '<script>alert("User Gagal Ditambahkan")</script>';
    }
    echo '<script>window.location="../index.php?p=mahasiswa"</script>';
}
?>
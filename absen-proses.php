<?php
require "koneksi.php";

$tgl_presensi = $_POST['tgl_presensi'];
$makul = $_POST['makul'];
$kelas = $_POST['kelas'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$status_presensi = $_POST['presensi'];

	
if(isset($_POST['submit'])){
    $sql = "SELECT * FROM mahasiswa WHERE kelas = '$kelas'";
    $q_tampil = mysqli_query($db, $sql);
    while ($r_tampil = mysqli_fetch_array($q_tampil)){
        $sql = 
        "INSERT INTO presensi
            VALUES('$tgl_presensi','$makul', '$kelas', '$nim', '$nama', '$status_presensi)";
        $query = mysqli_query($db, $sql);
    }

    if ($query === TRUE){
        echo '<script>alert("Presensi Berhasil Ditambahkan")</script>';
    }else{
        echo '<script>alert("Presensi Gagal Ditambahkan")</script>';
    }
    echo '<script>window.location="index.php"</script>';
}
?>
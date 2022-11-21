<?php
require "../../koneksi.php";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$name = test_input($_POST['name']);
$email = test_input($_POST['email']);
$password = test_input($_POST['pass']);
$role = $_POST['role'];

date_default_timezone_set("Asia/Jakarta");
$created = date('Y-m-d H:i:s');
$edited = date('Y-m-d H:i:s');
	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO user
		VALUES('$email','$name', '$password','$role', '$created', '$edited')";
	$query = mysqli_query($db, $sql);

    if ($query === TRUE){
        echo '<script>alert("User Berhasil Ditambahkan")</script>';
    }else{
        echo '<script>alert("User Gagal Ditambahkan")</script>';
    }
    // header("location:../index.php?p=user");
    echo '<script>window.location="../index.php?p=user"</script>';
}
?>
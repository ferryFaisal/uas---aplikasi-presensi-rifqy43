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
$edited = date('Y-m-d H:i:s');

	
if(isset($_POST['simpan'])){

	$sql = 
	"UPDATE user
		SET name='$name', password='$password', role='$role', date_modified='$edited' WHERE email='$email'";
	$query = mysqli_query($db, $sql);

    if ($query === TRUE){
        echo '<script>alert("User Berhasil Diedit")</script>';
    }else{
        echo '<script>alert("User Gagal Diedit")</script>';
    }
    header("location:../index.php?p=user");
}
?>
<?php
require 'koneksi.php';

$email = $_POST['femail'];
$password = $_POST['fpass'];

if(isset($_POST['submit'])){
    $q_tampil=mysqli_query($db,"SELECT * FROM user WHERE email='$email'");
	$r_tampil=mysqli_fetch_array($q_tampil);

    if(($r_tampil['email'] == $email) && ($r_tampil['password'] == $password)){
        
        session_start();
        $_SESSION['role'] = $r_tampil['role'];
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $r_tampil['name'];

        echo '<script>alert("Login Berhasil")</script>';

        if($r_tampil['role'] == 'dosen'){
            echo '<script>window.location="index.php"</script>';
        }else{
            echo '<script>window.location="admin/index.php"</script>';
        }
    }else{
        echo '<script>alert("Login Gagal")</script>';
        echo '<script>window.location="login.php"</script>';
    }
}
?>
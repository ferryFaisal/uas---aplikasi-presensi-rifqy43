<?php

$server = "localhost";
$user = "root";
$pass = "";
$nama_db = "webprodb";

$db = mysqli_connect($server, $user, $pass, $nama_db);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
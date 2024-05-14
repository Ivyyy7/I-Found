<?php
//variabel koneksi db
$local = "localhost";
$user = "root";
$password = "";
$db = "i_found";

//buat koneksi
$connection = new mysqli($local, $user, $password, $db);

//cek koneksi
if ($connection ->connect_error) {
    echo "Koneksi Gagal :" . $connection->connect_error;
    die;

}else{
   // echo "Koneksi Berhasil...";
}
?>
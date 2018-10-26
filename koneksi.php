<?php
// konfigurasi database
$host       =   "localhost"; 
$user       =   "root";
$password   =   "";
$database   =   "penjualan";
// perintah php untuk akses ke database
$koneksi =new mysqli($host, $user, $password, $database) or die ('mysql tidak connect');
?>
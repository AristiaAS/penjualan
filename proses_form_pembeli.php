<?php
include "koneksi.php";

$namanya		=$_POST['nm'];
$alamatnya		=$_POST['almt'];
$ttlnya			=$_POST['ttl'];
$hpnya			=$_POST['hp'];
$emailnya		=$_POST['email'];
$reknya			=$_POST['rek'];
$usernya		=$_POST['user'];
$passnya		=$_POST['pass'];

$tambah=mysqli_query($koneksi,"INSERT INTO data_pembeli(`nama`, `alamat`, `ttl`, `no_hp`, `email`, `rek`, `user`, `pass`) values
('$namanya','$alamatnya','$ttlnya','$hpnya','$emailnya','$reknya','$usernya','$passnya')");


if ($tambah) {echo "data berhasil masuk";} 

?>


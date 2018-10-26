<?php
include "koneksi.php";
$namatokonya=$_POST['nmtoko'];
$alamatnya=$_POST['almt'];
$hpnya=$_POST['hp'];
$reknya=$_POST['rek'];
$usernya=$_POST['user'];
$passnya=$_POST['pass'];
$tambah=mysqli_query($conn,"insert into data_penjual
(nama_toko,alamat,no_hp,rek_tujuan,user,pass)values
('$namatokonya','$alamatnya','$hpnya',
'$reknya','$usernya','$passnya')");
if ($tambah) {echo "data berhasil masuk";} 

?>


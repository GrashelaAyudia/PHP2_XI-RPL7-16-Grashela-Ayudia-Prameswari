<?php

include "koneksi.php";
 
 $id = $_GET['id_buku'];
 mysqli_query($koneksi, "delete from buku where id_buku = $id");

 if( mysqli_affected_rows($koneksi) > 0){
	echo "<script>alert('Berhasil Hapus Data');
	document.location.href = 'index.php';</script>";
} else{
	echo "<script>alert('Gagal Hapus Data')</script>";
}
 
 ?>
 
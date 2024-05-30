<?php
// memanggil koneksi database
include("koneksi.php");

// mengambil nilai id dari GET
$id = $_GET['idbuku'];

// menghapus data di database sesuai id
$result = mysqli_query($koneksi, "DELETE FROM buku WHERE idbuku= '$id'");

// redirect ke index
header("Location:../admin/index.php");
?>
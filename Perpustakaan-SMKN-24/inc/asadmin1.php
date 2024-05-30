<?php
include ("../inc/koneksi.php")
?>
<?php
if (isset($_POST['simpan'])){
    // menangkap data dari form
    $idbuku = $_POST['idbuku'];
    $judul = $_POST['judul'];
    $tema = $_POST['tema'];
    $kutipan = $_POST['kutipan'];
    $isi = $_POST['isi'];
     
    // menginput data ke table barang
     
    mysqli_query($koneksi,"INSERT INTO buku VALUES ('$idbuku','$judul','$tema','$kutipan','$isi')")or die(mysqli_error($koneksi));
     
    // mengalihkan halaman kembali ke index.php
    header("location:../admin/index.php");

}


?>
<?php 
// https://www.malasngoding.com
// menghubungkan koneksi database
include 'koneksi.php';

if (isset($_POST['simpan'])){
    // menangkap data dari form
    $iduser = $_POST['iduser'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];
    $level = $_POST['level'];
     
    // menginput data ke table barang
     
    mysqli_query($koneksi,"INSERT INTO user VALUES ('$iduser','$name','$username','$password','$gender','$email', '$phone', '$status', '$level')")or die(mysqli_error($koneksi));
     
    // mengalihkan halaman kembali ke index.php
    header("location:../admin/index.php");

}

?>
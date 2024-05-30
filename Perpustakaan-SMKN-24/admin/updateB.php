<?php
include ("../inc/koneksi.php")
?>
<?php
include ("../boostrap/link.php")
?>
<?php
$id = $_GET["idbuku"];
if (isset($_POST["update"])) {
	
    $judul = $_POST['judul'];
    $tema = $_POST['tema'];
    $kutipan = $_POST['kutipan'];
    $isi = $_POST['isi'];

  	$sql = "UPDATE buku SET `judul`='$judul',`tema`='$tema',`kutipan`='$kutipan',`isi`='$isi' WHERE idbuku ='$id'";

  	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		echo "<script>
			alert('Data Berhasil Disimpan!!!');
			document.location.href = '../admin/index.php';
			</script>";
	} else {
		echo "Failed: " . mysqli_error($koneksi);
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Admin & User</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../boostrap/tau.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Update Admin & User Perpus</h2>
                        <form method="POST" action="" class="register-form" id="register-form">
                            <?php
                            $sql = "SELECT * FROM buku WHERE idbuku = '$id' LIMIT  1";
                            $result = mysqli_query($koneksi, $sql);
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <div class="form-group">
                                <label for="idbuku"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="idbuku" required="required" id="idbuku"
                                    value="<?php echo $row['idbuku']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="judul"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="judul" id="judul" value="<?php echo $row['judul']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="tema"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="tema" id="tema" value="<?php echo $row['tema']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="kutipan"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="kutipan" id="kutipan"
                                    value="<?php echo $row['kutipan']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="isi"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="isi" id="isi" value="<?php echo $row['isi']; ?>" />
                            </div>
                            
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="update" id="signup" class="form-submit" value="Kirim Data" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../img/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">Kembali Ke-Index</a>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>